@extends('front.layouts.app')
@include('front.layouts.navbar')
<head>
    <meta name="Booky" content="">
    <title>Booky | Borrow Status</title>
</head>
@section('content')
<div class="main-banner">
    <div class="currently-market">
        <div class="container">
          <div class="row">

<table class="table table-striped table-hover table-sm table-bordered border-white table-dark ">
@include('front.inc.message')
    <div class="col-lg-20">
        <div class="section-heading">
          <div class="line-dec"></div>
          <h2><em>My </em>Books Borrow Status</h2>
        </div>
      </div>
    <thead class="thead-dark">
    <tr>
    <th>#</th>
    <th>Book Title</th>
    <th>Book Image</th>
    <th>Borrow Date</th>
    <th>Borrow Status</th>
    <th>Cancel Borrow</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
<tr>

    <td>{{$loop->iteration}}</td>
    <td>{{ $data->book->title }}</td>
    <td>

        <img src="front\assets\images\books/{{ $data->book->image }}" height="150" width="10">
         {{-- <img src="{{ asset($data->book->image) }}" height="150" width="50"> --}}
    </td>
    <td>{{ $data->created_at }}</td>
    <td>{{ $data->status }}</td>
    <td>
        @if($data->status=='Applied')
        <a href="{{ route('front.cancel.borrow' , $data->id) }}" class="btn btn-warning">Cancel</a>
        @else
        <p>Not Allowed To Cancel</p>
        @endif
    </td>
</tr>

@endforeach

    </tbody>
      </table>




          </div></div></div>
@endsection
