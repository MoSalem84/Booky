
@extends('back.admin.cpanel.layouts.app')

@section('changingpart')


<div>
    @include('back.inc.message')

</div>


<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <h1>All Authors</h1>

        <a href="{{ route('authors.create') }}" class="btn btn-success">Add Author</a>
        <table class="table table-striped table-hover table-sm table-bordered border-white table-dark ">
            <thead class="thead-dark">
            <tr>
            <th>#</th>
            <th>Author Name</th>
            <th>Author Info</th>
            <th>Author Image</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($authors as $author)

            <tr>
              <td>{{$loop->iteration}}</td>

              <td>{{$author->name}}</td>
              <td>{{$author->info}}</td>
              <td>
                <img src="front\assets\images\authors/{{ $author->image }}" height="100" width="100">

            </td>

              <td>
            <a href="{{url('authors/'.$author->id.'/edit')}}" class="btn btn-info">Edit</a>
            </td>
              <td>
                <form action="{{url('authors/'.$author->id)}}" method="POST">
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


