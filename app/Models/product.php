<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_id',
        'make',
        'model',
        'description',
        'price',        
        'imgUrl',
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class, 'collection_id');
    }
}