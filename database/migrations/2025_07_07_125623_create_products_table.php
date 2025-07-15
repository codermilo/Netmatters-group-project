<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Collection::class);
            $table->timestamps();
            $table->string('make');
            $table->string('model');
            $table->string('description');
            $table->integer('price');
            $table->float('rating', 2);
            $table->integer('stock');
            $table->string('thumbnail');
            $table->string('imgUrl1');
            $table->string('imgUrl2');
            $table->string('imgUrl3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
