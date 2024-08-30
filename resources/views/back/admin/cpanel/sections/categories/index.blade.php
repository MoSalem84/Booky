@extends('back.admin.cpanel.layouts.app')

@section('changingpart')

    <div>
        @include('back.inc.message')

    </div>

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1>All Categories</h1>

            <a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a>

    <table class="table table-striped table-hover table-sm table-bordered border-white table-dark ">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Category Icon</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $category->name }}</td>

                    <td>{{ $category->icon }}</td>


                    <td>
                        <a href="{{ url('categories/' . $category->id . '/edit') }}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{ url('categories/' . $category->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

          </div></div></div>
@endsection
