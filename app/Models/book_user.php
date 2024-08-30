<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_user extends Model
{
    use HasFactory;

    protected $fillable =[
        'status'
];

public function book(){

    return $this->belongsTo(Book::class);
}


public function user(){

    return $this->belongsTo(User::class);
}

}