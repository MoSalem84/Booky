@extends('back.admin.cpanel.layouts.app')

@section('changingpart')

<div>
    @include('back.inc.message')

</div>

<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <h1>All Books</h1>
        <a href="{{route('books.create')}}" class="btn btn-success">Add Book</a>

        <table class="table table-striped table-hover table-sm table-bordered border-white table-dark ">
            <thead class="thead-dark">
            <tr>
            <th>#</th>
            <th>Book Title</th>
            <th>Author Name</th>
            <th>Category Name</th>
            <th>Book Description</th>
            <th>Book Price</th>
            <th>Book Quantity</th>
            <th>Book Image</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($books as $book)

            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$book->title}}</td>
              <td>{{$book->author_name}}</td>
              <td>{{$book->category_name}}</td>
              <td>{{$book->description}}</td>
              <td>{{$book->price}}</td>
              <td>{{$book->quantity}}</td>
              <td>
                <img src="front\assets\images\books/{{ $book->image }}" height="200" width="100">

              </td>
             <td>
                <a href="{{url('books/'.$book->id.'/edit')}}" class="btn btn-info">Edit</a>
            </td>
              <td>
                <form action="{{url('books/'.$book->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>

            </tr>

            @endforeach


            </tbody>
              </table>

      </div>
    </div>
</div>


@endsection

