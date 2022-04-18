@extends('master')
@section("content")
<div class="trending" style="margin: 50px">
    <div class="row">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <h5>Result for search</h5>
            @foreach ($data as $item)
            <div style="margin-top: 50px">
                <a href="details/{{$item->id}}">
                    <img style="max-height:170px" src="{{$item->gallery}}">
                    <div>
                        <h3>{{$item->name}}</h3>
                        <h6>Smart made With Professional Hand</h6>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
