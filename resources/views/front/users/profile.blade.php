
@extends('front.layouts.app')
@include('front.layouts.navbar')
<head>
    <meta name="Booky" content="">
    <title>Booky | Profile</title>
</head>
@section('content')
<div class="main-banner">
    <div class="currently-market">
        <div class="container">
          <div class="row">

    <div class="col-lg-20">
        <div class="section-heading">
          <div class="line-dec"></div>
          <h2><em>My </em>Profile</h2>
        </div>
      </div>
      Welcome : {{ Auth::user()->name }}

          </div></div></div>
