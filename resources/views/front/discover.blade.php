@extends('front.layouts.app')
@include('front.layouts.navbar')
<head>
    <meta name="Booky" content="">
    <title>Booky | Discover</title>
</head>
@section('content')

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner">
    <div class="currently-market">
        <div class="container">
          <div class="row">

            <div id="category-nav">
            <div class="col-lg-20">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h2><em>Currently </em>Books In Library</h2>
              </div>
            </div>

          {{-- category menu bar--}}
            <div class="col-lg-10">
              <div class="filters">
                <ul>

                  <li data-filter="*"  class="active">All Categories</li>

                  @foreach ($categories as $category)
                  <li>
                  <a href="{{url('cat_menubar' , $category->id)}}">{{$category->name}}</a>
                  </li>

                  @endforeach

                </ul>
              </div>
            </div>

          {{-- end category menu bar--}}
                <br>
            </div>

            @include('front.inc.message')

    {{-- search section --}}
            <form action="{{url('search')}}" method="GET">

              <div class="row" style="margin: 30px">

                                <div class="col-md-8">

                    <input  class="form-control" type="search" name="search" placeholder="Search for book title or Author name">
                  </div>

                  <div class="col-md-4">
                    <input type="submit" class="btn btn-primary" value="search">
                  </div>

              </div>
            </form>
    {{-- end search section --}}

            <div class="col-lg-12">
              <div class="row grid">
                @foreach ($books as $book)
                <div class="col-lg-6 currently-market-item all ">
                  {{-- check css all msc--}}
                  <div class="item">

                        <div class="left-image">

                            <a href="{{route('front.book.details' , $book->id)}}">

                    <img src="front\assets\images\books/{{ $book->image }}" style="border-radius: 20px; min-width: 195px;">

                          </a> </div>
                    <div class="right-content">
                      <h4>{{$book->title}}</h4>
                      <span class="author">
                        {{-- <img src="front\assets\img\authors/{{ $author->$book->image }}" alt="" style="max-width: 50px; border-radius: 50%;"> --}}

                        <h6>{{$book->author_name}}<br><a href="#">@libertyart</a></h6>
                      </span>
                      <div class="line-dec"></div>
                      <span class="bid">
                        {{$book->category_name}}
                      </span>
                      <div class="line-dec"></div>

                      <span class="bid">
                        available to borrow
                        {{$book->quantity}}
                      </span>
                      <span class="ends">
                        <a class="btn btn-primary" href="{{url('borrow_book' , $book->id)}}">Request to Borrow</a>

                      </span>
                      {{-- <div class="text-button">
                        <a href="details.html">View Book Details</a>
                      </div> --}}
                    </div>

                  </div>
                </div>
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </div>

</div>
  <!-- ***** Main Banner Area End ***** -->

@endsection

