@extends('front.layouts.app')
@include('front.layouts.navbar')

<head>
    <meta name="Booky" content="">
    <title>Booky | Author Details</title>
</head>
@section('content')
    <div class="item-details-page">
        <div class="container">
            <div class="row">
                @foreach ($books as $book)
@endforeach
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>

                        <h2>View Details For<em> {{$books->title}}</em> Here.</h2>

                        @include('front.inc.message')

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="left-image">
                        <img src="front\assets\images\books/{{ $books->image }}" height="100" width="100">

                        {{-- <img src="assets/images/item-details-01.jpg" alt="" style="border-radius: 20px;"> --}}
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <span class="author">
                        {{-- <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;"> --}}
                        <h6>{{$books->author_name}}<br>
                            {{-- <a href="#">@libertyart</a> --}}
                        </h6>
                    </span>
                    <p>
                        {{$books->description}}
                    </p>
                    <div class="row">
                        <div class="col-3">
                            <span class="bid">
                                Available
                                <br><strong>{{$books->quantity}}</strong>
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="owner">
                                Price<br><strong>{{$books->price}}</strong>
                            </span>
                        </div>
                        </div>
                        <a class="btn btn-primary" href="{{ url('borrow_book', $books->id) }}">Request to Borrow</a>

                </div>

            </div>

        </div>
    </div>
@endsection
