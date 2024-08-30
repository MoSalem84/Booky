@extends('front.layouts.app')
@extends('front.layouts.navbar')
@section('content')

    <head>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Register &mdash; Booky</title>

    </head>

    <body class="layout-4">

        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div
                            class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Register</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" class="form-control" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            </div>
                                            </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="password" class="d-block">Password</label>
                                                <input id="password" type="password" class="form-control pwstrength"
                                                    data-indicator="pwindicator" name="password" required>
                                                <div id="pwindicator" class="pwindicator">
                                                    <div class="bar"></div>
                                                    <div class="label"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="password-confirm" class="d-block">Password Confirmation</label>
                                                <input id="password2" type="password" class="form-control"
                                                    name="password_confirmation">
                                            </div>
                                        </div>
                                        
                                            <div class="form-group ">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" id="address">
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone">
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Photo</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                              </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="agree" class="custom-control-input"
                                                    id="agree">
                                                <label class="custom-control-label" for="agree">I agree with the terms
                                                    and conditions</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-primary btn-lg btn-block">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

    </body>
@endsection
