@extends('master')
@section("content")
<div class="trending" style="margin: 50px">
    <div class="col-sm-10">
            <h5>Your Cart Items</h5><br><br>
            @foreach ($products as $item)
            <div style="margin-top: 50px ; border-bottom:1px solid #ccc; margin-bottom:30px" class="row">
                <div class="col-sm-3">
                    <a href="details/{{$item->id}}">
                        <img style="max-height:170px" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="details/{{$item->id}}">
                        <div>
                            <h3>{{$item->name}}</h3>
                            <h6>Smart made With Professional Hand</h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                </div>
            </div>
            @endforeach
            <a href="ordernow" class="btn btn-success">Order Now</a>

    </div>
</div>
@endsection
