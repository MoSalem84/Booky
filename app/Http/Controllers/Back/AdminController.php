<?php

namespace App\Http\Controllers\Back;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register()
    {
        return view('back.admin.cpanel.sections.admins.register');
    }

    public function store(Request $request)

    {
        $data =  $request->validate([

                    'name' => ['required', 'string', 'max:255'],
                    'role'=>['required' , 'in:user,admin'] ,
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'phone' => ['string'],
                    'address' => ['string', 'min:8'],
                    'image'=>['image' ,'mimes:png,jpg,jpeg'],
                 ] );

                 $users = new User() ;
                 $users->name = $request->name ;
                 $users->email = $request->email ;
                 $users->password = Hash::make($request->password) ;
                 $users->role = $request->role ;
                 $users->phone = $request->phone;
                 $users->address = $request->address;
                 $users->save() ;



     // User::create($data) ;

                 // if($request->role =='admin'){
                 //     $users->role =='admin' ;
                 //  }


         return view('back.admin.cpanel.home');
         }


    // public function logout(){

    // Auth::guard('web')->logout() ;

    // return view('back.admin.cpanel.home');

    //      }


    // public function profile(){



    //              }

}
