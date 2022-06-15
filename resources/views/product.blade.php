@extends("master")
@section("content")

  <header>
    <!-- Intro settings -->
    <style>
      /* Default height for small devices */
      #intro-example {
        height: 400px;
      }

      /* Height for devices larger than 992px */
      @media (min-width: 992px) {
        #intro-example {
          height: 600px;
        }
      }
    </style>

    <!-- Background image -->
    <div id="intro-example" class=" p-0 text-center bg-image" 
      style="background-image: url('https://i.pinimg.com/736x/19/6a/b3/196ab32c56e1d8a299c62028b3873ae1.jpg');">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7); height: 100%">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Start Shopping Now</h1>
            <h5 class="mb-4">Best & free guide of all you need</h5>
            <a
              class="btn btn-outline-light btn-lg m-2"
              href="#"
              role="button"
              rel="nofollow"
              target="_blank"
            >Get free ticket</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>


{{-- <div>
  <div class="trending" style="margin: 50px">
      <h2 style="margin-top: 30px">Trending Products</h2>
      @foreach ($data as $item)
      <div style="float:left;width:20%">
          <a href="details/{{$item->id}}">
              <img style="max-height:170px" src="{{$item->gallery}}">
              <div>
                  <h4 class="text-left">{{$item->name}}</h4>
              </div>
              <div>
                  <p class="text-center mr-3">{{$item->description}}</p>
              </div>
          </a>
      </div>
      @endforeach
  </div>
</div>
 --}}

 <div class="container mt-5 p-5 mb-4">
   <div class="row">
    @foreach ($data as $item)
     <div class="col pl-2 pr-2 m-2" style="box-shadow: 2px 7px 10px 2px #7c8093;">
      <a href="details/{{$item->id}}" style="text-decoration: none;">
       <img style="width: 100%; height: 300px" src="{{$item->gallery}}">
       <h4 class="text-center">{{$item->name}}</h4>
       <p class="text-center text-muted">{{$item->description}}</p>
      </a>
     </div>
     @endforeach
   </div>
 </div>
@endsection