<?php

namespace App\Http\Controllers\Back\cPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories= category::all() ;
        return view('back.admin.cpanel.sections.categories.index' ,compact('categories')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.admin.cpanel.sections.categories.create') ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


      $request->validate([

        'name'=>['required' ,'unique:categories,name','string' , 'min:3' , 'max:30'] ,

        'icon'=>['image','mimes:png,jpg,jpeg,gif']
        ]);



    $categories = new category() ;

    $categories->name = $request->name ;
    $categories->icon = $request->icon ;

    $categories->save() ;

    return redirect('categories')->with('success' , "Category has been added") ;

        }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('back.admin.cpanel.sections.categories.edit' , ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([

            'name'=>['required' ,'unique:categories,name','string' , 'min:3' , 'max:30'] ,

            'icon'=>['image','mimes:png,jpg,jpeg,gif']
    ]) ;


    $category->name = $request->name ;
    $category->icon = $request->icon ;

    $category->save() ;

    return redirect('categories')->with('success' , "Category has been updated") ;


}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('categories')->with('deleted' , "Category has been deleted") ;

    }
}