@extends('back.admin.cpanel.layouts.app')

@section('changingpart')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                @include('back.inc.message')

                <h1>Add Book</h1>

                <form action="{{url('books')}}" method="Post" enctype="multipart/form-data">
                    @csrf

        <div class="form-group">
            <label for="title">Book Title</label>
            <input type="text" class="form-control" name="title"
            id="title" placeholder="Enter Book Title">
          </div>

  <div class="form-group">
      <label for="">Category</label>
          <select name="category">
          @foreach ( $categories as $category)
          <option value={{ $category->id }}>
              {{ $category->name }}
          </option>
          @endforeach
           </select>
    </div>
    <div class="form-group">
      <label for="">Author Name</label>
      <select name="author">
      @foreach ( $authors as $author)
      <option value={{ $author->id }}>
          {{ $author->name }}
      </option>
      @endforeach
      </select>
    </div>
  <div class="form-group">
    <label for="description">Book Descripion</label>
    <textarea name="description" id="description" cols="100" rows="5"
    placeholder="Enter Book Description"></textarea>
  </div>

  <div class="form-group">
    <label for="price">Book Price</label>
    <input type="number" class="form-control" name="price"
    id="price" placeholder="Enter Book price">
  </div>

  <div class="form-group">
    <label for="quantity">Book Quantity</label>
    <input type="number" class="form-control" name="quantity"
    id="quantity" placeholder="Enter Book quantity">
  </div>

   <div class="form-group">
      <label for="image">Book Cover</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>

  <input type="submit" class="btn btn-primary" value="Add" >

  </form>
            </div></div></div>

@endsection









