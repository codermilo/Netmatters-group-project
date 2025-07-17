<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    // Will be for admins only. 
    public function index()
    {
        // Get all products (or you could paginate or limit)
        $collections = Collection::all();

        // Pass products to the view
        return view('admin.collection', compact('collection'));
    }

    public function create()
    {
        return view('admin/create');
    }

    private function validateInputs(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:254'],
            'description' => ['sometimes', 'string']
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $this->validateInputs($request);
        Collection::create($attributes);
        return redirect(route('admin.collections'));
    }

    public function edit()
    {
        return view('admin.company.edit');
    }

    public function update(Request $request, Collection $collection)
    {
        $attributes = $this->validateInputs($request);
        Collection::update($attributes);
        return redirect(route('admin.collections'));
    }

    public function delete(Collection $collection)
    {
        $collection->delete();
        return redirect(route('admin.collections'));
    }

}
