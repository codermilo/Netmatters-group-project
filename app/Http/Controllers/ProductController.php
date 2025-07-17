<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;
use App\Models\Product;  // Don't forget to import your Product model
use App\Models\Collection;

class ProductController extends Controller
{
    // Will be for admins only. 
    public function index()
    {
        // Get all products (or you could paginate or limit)
        $products = Product::all();

        // Pass products to the view
        return view('admin.products', compact('products'));
    }

    public function create()
    {
        $collections = Collection::all()->sortBy('name');
        return view('admin.products.create', ['collections' => $collections]);
    }


    private function imagesValidation(): array
    {
        return [
            File::image()
                ->dimensions(Rule::dimensions()
                    ->minWidth(100)
                    ->minHeight(100))
        ];
    }

    private function validateInputs(Request $request): array
    {
        return $request->validate([
            'collectionId' => ['required', 'integer', 'min:0'],
            'make' => ['required', 'string', 'max:254'],
            'model' => ['required', 'string', 'max:254'],
            'description' => ['sometimes', 'string'],
            'price' => ['required', 'numeric', 'decimal:2', 'min:0'],
            'stock' => ['required', 'numeric', 'min:0'],
            'thumbnail' => array_merge(
                $this->imagesValidation(),
                ['required', 'File']
            ),
            // Front end input will look like this:
            // <input type="file" name="logos[]" multiple accept="image/*">
            'images' => ['required', 'array', 'min:1', 'max:3'],
            'images.*' => array_merge(
                $this->imagesValidation(),
                ['File']
            ),
        ]);
    }

    private function storeImages(array $attributes, array $singles, array $multis, Request $request): array
    {
        return collect($attributes)->flatMap(function ($value, $key) use ($request, $singles, $multis) {
            if (in_array($key, $singles) && $value) {
                return [$key => $request->file($key)->store('logos')];
            }

            if (in_array($key, $multis) && is_array($value)) {
                return collect($request->file($key))
                    ->mapWithKeys(function ($file, $index) {
                        return ['imgUrl' . ($index + 1) => $file->store('logos')];
                    })->toArray();
            }

            return [$key => $value];
        })->filter()->toArray();
    }

    public function store(Request $request)
    {
        $validated = $this->validateInputs($request);

        $imageFields = ['thumbnail'];
        $multiImageFields = ['images'];

        $processedAttributes = $this->storeImages($validated, $imageFields, $multiImageFields, $request);

        Product::create($processedAttributes);
        return redirect(route('admin.products'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $this->validateInputs($request);

        $imageFields = ['thumbnail'];
        $multiImageFields = ['images'];

        $processedAttributes = $this->storeImages($validated, $imageFields, $multiImageFields, $request);

        if (isset($prcoessedAttributes['thumbnail']) && $product->thumbnail) {
            Storage::delete($product->thumbnail);
        }

        foreach (['imgUrl1', 'imgUrl2', 'imgUrl3'] as $imgField) {
            if (isset($processedAttributes[$imgField]) && $product->$imgField) {
                Storage::delete($product->$imgField);
            }
        }

        $product->update($processedAttributes);

        return redirect(route('admin.products'));
    }

    public function delete(Product $product)
    {
        if ($product->thumbnail) {
            Storage::delete($product->thumbnail);
        }

        foreach (['imgUrl1', 'imgUrl2', 'imgUrl3'] as $imgField) {
            if ($product->imgField) {
                Storage::delete($product->imgField);
            }
        }

        $product->delete();

        return redirect(route('admin.products'));
    }
}
