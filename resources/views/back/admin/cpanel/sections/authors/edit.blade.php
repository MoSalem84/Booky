@extends('back.admin.cpanel.layouts.app')

@section('changingpart')

<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <form action="{{url('authors/'.$author->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
    @method('PUT')

    @include('back.inc.message')

    <h1>Edit Author Info </h1>

    <div class="form-group">
        <label for="author name">Edit Author Name </label>
        <input type="text" class="form-control" name="name"
        value="{{ $author->name }}"
        id="" placeholder="Edit Author Name">
      </div>

      <div>
      <label for="author info">Edit Author Info </label>

      <textarea name="info" id="info" cols="100" rows="5"
      placeholder="Enter Author Info">{{ $author->info}}</textarea>

    </div>

      <div>
    <label for="author image">Edit Author image </label>
    <input type="file" class="form-control" name="image"
    value="{{ $author->image}}"
    id="">
  </div>

      <input type="submit" class="btn btn-primary" value="Edit" >

    </form>

      </div></div></div>


@endsection
