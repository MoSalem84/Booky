<?php

namespace App\Http\Controllers\Front;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\book_user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    { {
            $books      = Book::all();
            return view('home', compact('books'));
        }
    }

    public function discover()
    {
        $categories = Category::all();
        $books      = Book::all();
        $authors    = Author::all();

        return view('front.discover', compact('categories', 'books', 'authors'));
    }

    public function about()
    {

        return view('front.about');
    }


    public function search(Request $request)
    {

        $categories = Category::all();

        $search = $request->search;
        $books = Book::where('title', 'LIKE', '%' . $search . '%')->orWhere('author_name', 'LIKE', '%' . $search . '%')->get();


        return view('front.discover', compact('books', 'categories'));
    }


    public function cat_menubar($id)
    {

        $categories = Category::all();

        $books = Book::where('category_id', $id)->get();

        return view('front.discover', compact('categories', 'books'));
    }

    public function borrow($id)
    {


        $books = Book::findOrFail($id);
        $book_id = $id;
        $quantity = $books->quantity;

        // dd($quantity);

        if ($quantity >= 1) {

            if (Auth::id()) {

                $user_id = Auth::user()->id;
                $borrow = new book_user;

                $borrow->book_id = $book_id;
                $borrow->user_id = $user_id;
                $borrow->status = 'Applied';
                $borrow->save();

                // dd($book_id);
                return redirect()->back()->with('borrowWaiting', 'Your request is send to admin');
            } else {

                return redirect()->route('login');
            }
        } else {

            return redirect()->back()->with('borrowMessage', 'Sorry but not enough book available');
        }

        return view('front.sections.borrow_book', compact('books'));
    }

    public function book_details($id)
    {

        $books = Book::findOrFail($id);

        return view('front.books.book_details', compact('books'));
    }
}
