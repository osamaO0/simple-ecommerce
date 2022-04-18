@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$det->gallery}}">
        </div>
        <div class="col-sm-6">
            <a href='/'>Go Back</a><br><br>
            <h2> {{$det->name}}</h2><br>
            <h3>Price: {{$det->price}}</h3>
            <h4>Smart made With Professional Hand</h4><br><br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value= {{$det->id}}>
                <button class="btn btn-primary">add to Cart </button>
                <button class="btn btn-success">Buy Now</button>
            </form>
        </div>
    </div>
</div>

@endsection
