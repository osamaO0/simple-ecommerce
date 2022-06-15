@extends('master')
@section('content')
{{-- <div style="background-color: #b1b0d2; max-width:500px; margin:0 auto; border-radius: 30px;">
<h1 style="text-align: center;padding-top:70px">Login</h1>
<form action="login" method="POST"
style="max-width: 400px; padding-top:100px; margin: 0 auto;padding-bottom:100px ">
@csrf
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="inputPassword">
      </div>
    </div>
    <button class="btn btn-primary">Login</button>
  </form>
</div>

<style>
body{
    background-image: url("Pngtree.png");
    background-repeat: no-repeat;
    background-size: cover;
}

</style> --}}


<section class="vh-100 mt-5">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-5">
        <form action="login" method="POST">
          @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-3 me-3">Sign in </p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      
    </div>
  </div>
</section>

@endsection
