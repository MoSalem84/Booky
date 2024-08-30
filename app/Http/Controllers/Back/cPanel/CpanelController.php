<?php

namespace App\Http\Controllers\Back\cPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book_user;
use App\Models\Book;

class CpanelController extends Controller
{
    public function index()
    {
        return view('back.admin.cpanel.home');
    }

//borrow request
public function borrow_request(){

        $borrowRequests = book_user::all() ;
    
    return view('back.admin.cpanel.messages.borrow_request' , compact('borrowRequests'));
    }

//borrow approval
public function approve_borrow($id){

        $approve = book_user::find($id);
        $status = $approve->status ;
    
    if($status =='approve'){
    
    return redirect()->back()->
    with('alreadyApproved' , 'The borrow request is already approved') ;
    
    }else{
        $approve->status = 'approve' ;
        $approve->save() ;
    
    //change quantity after approve
        $bookId = $approve->book_id ;
        $book = Book::find($bookId);
        $book_qty = $book->quantity -'1'  ;
        $book->quantity =$book_qty ;
        $book->save() ;
    
        return redirect()->back() ;
    }
    }

//borrow return

public function return_borrow($id){

        $approve = book_user::find($id);
        $status = $approve->status ;
    
    if($status =='returned'){
    
    return redirect()->back()->
    with('alreadyApproved' , 'The borrow book is returned') ;
    
    }else{
        $approve->status = 'returned' ;
        $approve->save() ;
    
    //change quantity after approve
        $bookId = $approve->book_id ;
        $book = Book::find($bookId);
        $book_qty = $book->quantity +'1'  ;
        $book->quantity =$book_qty ;
        $book->save() ;
    
        return redirect()->back() ;
    }
    }

//borrow reject

public function reject_borrow($id){

        $data = book_user::find($id);
        $data->status = "Rejected" ;
        $data->save() ;
        
        return redirect()->back()->
        with('rejectBorrow' , 'The borrow request is rejected') ;
        
        }




















}
