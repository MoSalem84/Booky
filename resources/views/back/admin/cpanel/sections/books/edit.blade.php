@extends('back.admin.cpanel.layouts.app')

@section('changingpart')

<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <form action="{{url('books/'.$book->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
    @method('PUT')
    @include('back.inc.message')

    <h1>Edit Book Info </h1>


{{-- edit Book Title --}}

<div class="form-group">
    <label for="title">Edit Book Title</label>
    <input type="text" class="form-control" name="title"  value="{{ $book->title }}"  id="title">
  </div>

{{-- edit Category Name --}}

  <div class="form-group">
    <label for="">Edit Category</label>
        <select name="category">
        @foreach ( $categories as $category)
        <option value={{ $category->id }}>
            {{ $category->name }}
        </option>
        @endforeach
         </select>
  </div>

{{-- edit Author Name --}}
  <div class="form-group">
    <label for="">Edit Author Name</label>
    <select name="author">
    @foreach ( $authors as $author)
    <option value={{ $author->id }}>
        {{ $author->name }}
    </option>
    @endforeach
    </select>
  </div>

{{-- edit Book Descripion --}}

<div class="form-group">
<label for="description">Edit Book Descripion</label>
<textarea name="description" id="description" cols="20" rows="5">{{ $book->description}}</textarea>
</div>

{{-- edit Book Price --}}

<div class="form-group">
<label for="price">Edit Book Price</label>
<input type="text" class="form-control" name="price" id="price" value="{{ $book->price }}">
</div>

{{-- edit Book Quantity --}}


<div class="form-group">
<label for="quantity">Edit Book Quantity</label>
<input type="number" class="form-control" name="quantity" id="quantity" value="{{ $book->quantity}}">
</div>


{{-- edit Book Cover --}}

<div class="form-group">
<label for="image">Edit Book Cover</label>
<input type="file" class="form-control" name="image" id="image">
</div>


  <input type="submit" class="btn btn-primary" value="Edit" >

</form>
    </div></div></div>
@endsection






