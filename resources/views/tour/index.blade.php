<x-guest-layout>
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/tour.css')}}">

    <div class="amazing-deals">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading text-center">
                <h2 style=" color: #e7b966"><b>Best Weekly Tour Offers In Each City</b></h2>
                <br>
                <p>Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours.</p>
                <br>
                <br>
              </div>
            </div>
            @foreach ($tours as $tour)
          
            <div class="col-lg-6 col-sm-6">
              <div class="item">
                <div class="row">

                  <div class="col-lg-6">
                    <div class="image">
                      <img class="img-thumbnail" src="{{$tour->media[0]->getUrl()}}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 align-self-center">
                    <div class="content">
                      <span class="info">*{{$tour->promo}}</span>
                      <h4>{{$tour->name}}</h4>
                      <div class="row">
                        <div class="col-6">
                          <i class="fa fa-clock"></i>
                          <span class="list">{{$tour->duration}}</span>
                        </div>
                        <div class="col-6">
                          <i class="fa fa-map"></i>
                          <span class="list">TK. {{$tour->price}}</span>
                        </div>
                      </div>
                      <p>{{$tour->description}}</p>
                      <div class="main-button">
                        @if ($bookedTours !=null)
                          @if ($bookedTours->contains($tour))
                            <a href="{{route('tour.index')}}">Booked</a>  
                          @else
                          <a href="{{route('reserve.create', ['id'=>$tour])}}">Make A Reservation</a>  
                          @endif
                        @else
                          <a href="{{route('login')}}">Make A Reservation</a>  
                        @endif
                      </div>
                    </div>
                  </div>
                    
                </div>
              </div>
            </div>
            @endforeach
        
            {{-- <div class="col-lg-12">
              <ul class="page-numbers">
                <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li ><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
              </ul>
            </div> --}}
          </div>
        </div>
      </div>
</x-guest-layout>