<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.authors.index') ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function authorinfo()
    {
        return view('front.authors.author-info') ;
    }

}