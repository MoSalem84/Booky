<?php

namespace App\Http\Controllers\Back\cPanel;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Book::all();

        $categories = Category::select('id' , 'name')->get() ;

       return view('back.admin.cpanel.sections.books.index', compact('books' , 'categories')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id' , 'name')->get() ;
        $authors    = Author::select('id' , 'name')->get() ;


       return view('back.admin.cpanel.sections.books.create', compact('categories' , 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=  $request->validate([
            'title'    =>['required' ,'string' , 'min:2' , 'max:30' ] ,
            'description' =>['string' , 'max:1000'] ,
            'price'    =>['numeric'] ,
            'quantity' =>['required' , 'numeric'] ,
            'image'    =>['image' ,'mimes:png,jpg,jpeg,gif,webp']

    ]) ;
        // $image  =  $request->file('book_image')->store('public');

        $books = new Book;

        $book_image_name = $request->image ;

        if($book_image_name){

            $book_image_name = $book_image_name->getClientOriginalName();
            $request->image->move('front\assets\images\books' ,$book_image_name) ;
        }

        $cat_record = Category::find(request('category'));
        $author_record = Author::find(request('author'));

        // $name = $request->book_image->getClientOriginalName();

        // $image=  $request->getSchemeAndHttpHost().'/back/assets/img/book/'.$name ;

        // $request->book_image->move(public_path('/back/assets/img/book/') , $image) ;

        //dd($cat_record->id , $cat_record->cat_name ,
         //$author_record->id , $author_record->author_name);

    //   $image =   $request->file('book_image')->store('public');

    //   dd($image) ;

        $books->category_id      = $cat_record->id;
        $books->author_id        = $author_record->id;
        $books->author_name      = $author_record->name;
        $books->category_name    = $cat_record->name;
        $books->title            = $request->title;
        $books->description      = $request->description;
        $books->price            = $request->price;
        $books->quantity         = $request->quantity;
        $books->image            = $book_image_name;

        $books->save() ;
       return redirect('books')->with('success' , "Book has been added") ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::select('id' , 'name')->get() ;
        $authors    = Author::select('id' , 'name')->get() ;

        return view('back.admin.cpanel.sections.books.edit' , compact('book' , 'categories' ,'authors' )) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data=  $request->validate([

            'title'    =>['required' ,'string' , 'min:2' , 'max:30' ] ,
            'description'=>['required' , 'string' , 'max:1000'] ,
            'price'    =>['required' , 'numeric'] ,
            'quantity' =>['required' , 'numeric'] ,
            'image'    =>['image' ,'mimes:png,jpg,jpeg,gif,webp']
    ]) ;

    // dd($data) ;
        $cat_record = Category::find(request('category'));
        $author_record = Author::find(request('author'));

    // $name = $request->book_image->getClientOriginalName();

    // $image=  $request->getSchemeAndHttpHost().'/back/assets/img/book/'.$name ;

    // $request->book_image->move(public_path('/back/assets/img/book/') , $image) ;

    // $image =   $request->file('book_image')->store('public');


        $book->category_id      = $cat_record->id;
        $book->author_id        = $author_record->id;
        $book->author_name      = $author_record->name;
        $book->category_name    = $cat_record->name;
        $book->title            = $request->title;
        $book->description        = $request->description;
        $book->price             = $request->price;
        $book->quantity          = $request->quantity;
        // $book->image            = $image;

        $book->save() ;

        return redirect('books')->with('success' , "Book has been updated") ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete() ;
        return redirect('books')->with('deleted' , "Book has been deleted") ;
    }
}

