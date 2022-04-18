@extends('master')
@section('content')
<div style="background-color: #b1b0d2; max-width:500px; margin:0 auto; border-radius: 30px;">
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

</style>
@endsection
