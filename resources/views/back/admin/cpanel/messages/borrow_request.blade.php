@extends('back.admin.cpanel.layouts.app')

@section('changingpart')



<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <h1>All Borrow Requests </h1>


        @include('back.inc.message')

        <table class="table table-striped table-hover table-sm table-bordered border-white table-dark ">
            <thead class="thead-dark">
            <tr>
            <th>#</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Address</th>
            <th>User Phone</th>
            <th>Book Title</th>
            <th>Book Quantity</th>
            <th>Book Image</th>
            <th>Status</th>
            <th>Change Status</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $borrowRequests  as $request)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$request->user->name}}</td>
    <td>{{$request->user->email}}</td>
    <td>{{$request->user->address}}</td>
    <td>{{$request->user->phone}}</td>
    <td>{{$request->book->title}}</td>
    <td>{{$request->book->quantity}}</td>
    <td>

        <img src="front\assets\images\books/{{ $request->book->image }}" height="200" width="150">
      </td>
      <td>{{ $request->status }}</td>
      <td>
        <a class="btn btn-success" href="{{ route('admin.cpanel.approve.borrow' , $request->id) }}">Approve</a>
        <a class="btn btn-danger"href="{{ route('admin.cpanel.reject.borrow' , $request->id) }}">Reject</a>

        <a class="btn btn-info" href="{{ route('admin.cpanel.return.borrow' , $request->id) }}">Return</a>

      </td>



</tr>

@endforeach


            </tbody>
              </table>

      </div>
    </div>
</div>

@endsection
