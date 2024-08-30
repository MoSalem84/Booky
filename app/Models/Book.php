<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'author_name',
        'category_name',
        'description',
        'price',
        'quantity',
        'image',
];

public function authors(){

    return $this->belongsTo(Author::class);
}

public function categories(){

    return $this->belongsTo(Category::class);

}
}
