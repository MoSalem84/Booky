<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Models\book_user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('front.users.profile');
    }

    public function borrow_status()
    {

        if (Auth::id()) {
            $userId = Auth::user()->id;
            $data = book_user::where('user_id', '=', $userId)->get();
            return view('front.users.borrow_status', compact('data'));
        }
    }

    public function cancel_borrow($id)
    {

        $data = book_user::find($id);
        $data->delete();
        return redirect()->back()->with('cancelBorrow', 'Your borrow request has been cancelled');
    }
}
