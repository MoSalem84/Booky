@extends('back.admin.cpanel.layouts.app')

@section('changingpart')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                @include('back.inc.message')

                <h1>Add Author</h1>

                            <form action="{{ url('authors') }}"
                            method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Author Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Author Name">
                                </div>

                                <div class="form-group">
                                    <label for="info">Author Info</label>
                                    <textarea name="info" id="info" cols="100" rows="5" placeholder="Enter Author Info"></textarea>

                                </div>

                                <div class="form-group">
                                    <label for="image">Author Image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Add">

                            </form>
                        </div>
                    </div>
                </div>
            @endsection
