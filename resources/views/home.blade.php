@extends('front.layouts.app')
@include('front.layouts.navbar')

<head>
    <meta name="Booky" content="">
    <title>Booky Home</title>
</head>

@section('content')
  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h2>Welcome To Booky Library</h2>
            <h6>When imagination and reality collide</h6>
          </div>
        </div>
        {{-- <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="{{asset('front')}}/assets/images/banner-01.png" alt="">
            </div>
            <div class="item">
              <img src="{{asset('front')}}/assets/images/banner-02.png" alt="">
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->


  {{-- show categories section in home page --}}
  {{-- @include('front.sections.Categories_section') --}}

  {{-- show  New Arrived Books section in home page --}}

  @include('front.sections.new_books_section')

@endsection




