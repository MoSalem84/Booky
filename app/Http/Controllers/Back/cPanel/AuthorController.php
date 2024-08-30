<?php

namespace App\Http\Controllers\Back\cPanel;

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
        $authors = Author::all() ;
        return view('back.admin.cpanel.sections.authors.index' , compact('authors')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.admin.cpanel.sections.authors.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=>['required' , 'string' , 'min:2' ,'max:50' ],
            'info'=>['required' , 'string' , 'max:1000'],
            'image'=>['image' ,'mimes:png,jpg,jpeg,gif'],
            ] );

        $authors = new Author() ;

        // $image =   $request->file('image')->store('public');

            $author_image_name = $request->image ;

            if($author_image_name){

                $author_image_name = $author_image_name->getClientOriginalName();
                $request->image->move('front\assets\images\authors' ,$author_image_name) ;
            }

            $authors->name = $request->name ;
            $authors->info = $request->info ;
            $authors->image = $author_image_name;

            $authors->save() ;

        return redirect('authors')->with('success' , "Author has been added") ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('back.admin.cpanel.sections.authors.edit' , ['author'=>$author]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([

            'name'=>['required' , 'string' , 'min:2' ,'max:50' ],
            'info'=>['required' , 'string' , 'max:1000'],
            'image'=>['image' ,'mimes:png,jpg,jpeg,gif'],
            ] );

            $author_image_name = $request->image ;

            if($author_image_name){

                $author_image_name = $author_image_name->getClientOriginalName();
                $request->image->move('front\assets\images\authors' ,$author_image_name) ;
            }

            $author->name = $request->name ;
            $author->info = $request->info ;
            $author->image = $author_image_name;

        return redirect('authors')->with('success' , "Author has been updated") ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete() ;
return redirect('authors')->with('deleted' , "Author has been deleted") ;
    }
}
