@extends('master')
@section("content")
<div class="trending" style="margin: 50px">
    <div class="col-sm-10">
            <h3>My Orders</h3><br><br>
            @foreach ($orders as $item)
            <div style="margin-top: 50px ; border-bottom:1px solid #ccc; margin-bottom:30px" class="row">
                <div class="col-sm-3">
                    <a href="details/{{$item->id}}">
                        <img style="max-height:170px" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4">
                        <div>
                            <h3>Name: {{$item->name}}</h3>
                            <h6>Delivery Status: {{$item->status}}</h6>
                            <h6>Payment Status: {{$item->payment_status}}</h6>
                            <h6>Payment Method: {{$item->payment_method}}</h6>
                            <h6>Address: {{$item->address}}</h6>
                        </div>
                </div>>
            </div>
            @endforeach
    </div>
</div>
@endsection
