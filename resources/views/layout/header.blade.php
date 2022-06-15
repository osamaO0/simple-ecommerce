<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-comm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

@php
    use App\Http\Controllers\ProductController;
    $total=0;
    if (Session::has('user')) {
        $total=ProductController::cartItem();
    }
@endphp
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #020914;!important;">
    <a class="navbar-brand text-muted" href="">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link active text-white" href="/">Home</a>
          </li>
        @if (Session::has('user'))
        <li class="nav-item">
          <a class="nav-link text-white" href="/myorders">Orders</a>
        </li>
        <li class="nav-item" style="text-align: center" >
            <a class="nav-link text-white" href="/cartlist">Cart({{$total}})</a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link text-white" href="/login">Orders</a>
          </li>
        <li class="nav-item" style="text-align: center" >
            <a class="nav-link text-muted" href="/login">Cart({{$total}})</a>
        </li>
        @endif
      </ul>
      <form action="/search" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search" style="width:500px !important">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    @if (Session::has('user'))
    <div class="dropdown" style="margin-left: 25%">
        <button class="btn btn-secondary doopdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}}</button>
        <div class="dropdown-menu" area-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/logout">Logout</a>
        </div>
    </div>
    @else
    <div class="" style="margin-left: 25%">
        <a href="/login" class="btn btn-dark">Login</a>
    </div>
    <div style="margin-left: 10px">
        <a href="/register" class="btn btn-dark">Register</a>
    </div>
    @endif
  </nav>