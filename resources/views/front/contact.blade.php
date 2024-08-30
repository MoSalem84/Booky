@extends('front.layouts.app')
@include('front.layouts.navbar')
<head>
    <meta name="Booky" content="">
    <title>Booky | Contact</title>
</head>
@section('content')

<div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h2>Contact Us</h2>
                <h5>  Have questions? I have answers.<h5>
          </div>
        </div>


<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h5>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</h5>
                <div class="my-5">
{{-- start form --}}

@include('front.inc.message')
                    <form id="contactForm" action="{{ route('front.contact.sendMessage') }}" method="POST" data-sb-form-api-token="API_TOKEN">
                        @csrf
                        <div class="form-floating">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>


                        <div class="form-floating">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>


                        <div class="form-floating">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                            <label for="phone">Phone Number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>


                        <div class="form-floating">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>


                        {{-- <br />
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <br />

                            </div>
                        </div> --}}
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        {{-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> --}}
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                    </form>

                    {{-- end form --}}
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>













      </div>
    </div>
  </div>



  @endsection


    <body>

