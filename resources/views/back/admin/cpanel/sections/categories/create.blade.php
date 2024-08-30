@extends('back.admin.cpanel.layouts.app')

@section('changingpart')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                @include('back.inc.message')

                <h1>Add Category</h1>
                <form action="{{ url('categories') }}" method="POST" class="div_center" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Enter Category Name">
                    </div>

                    <div class="form-group">
                        <label for="icon">Category Icon</label>
                        <input type="file" class="form-control" name="icon" id="icon">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Add">

                </form>
            </div>
        </div>
    </div>
@endsection
