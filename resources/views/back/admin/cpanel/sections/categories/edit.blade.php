@extends('back.admin.cpanel.layouts.app')

@section('changingpart')

<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

<form action="{{url('categories/'.$category->id)}}"

    method="POST" enctype="multipart/form-data">
    @csrf
@method('PUT')

@include('back.inc.message')

    <h1>Edit Category Name </h1>

    <div class="form-group">
      <label for="name">Edit Category Name</label>
      <input type="text" class="form-control" name="name"
      value="{{ $category->name }}" id="name" placeholder="Enter Category Name">
    </div>

    <div class="form-group">
        <label for="icon">Edit Category icon</label>
        <input type="file" class="form-control" name="icon"
        value="{{ $category->icon }}" id="icon">
      </div>


    <input type="submit" class="btn btn-primary" value="Edit" >

  </form>
      </div></div></div>

@endsection









