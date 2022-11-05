<x-guest-layout>
    <link rel="stylesheet" href="{{asset('assets/css/Rooms.css')}}">

    <section class="header1">

        <h3 class="title1" style="color: white; padding: 7px; font-size: 20px;">KEEP CALM AND TRAVEL ON</h3>

    </section><br><br>

    <section class="section2">
        <h1 style="text-align: center;">LUXARIOUS SUITES</h1>
        <div class="sec">

            <div class="row">
                @foreach ($rooms as $room)
                <div class="col-4">

                    <div class="card">
                        <img src="{{$room->media[0]->getUrl()}}" alt="pix" class="img">
                        <div class="cont">
                            <h4><b>{{$room->name}}</b></h4>
                            <div class="location">
                                <b>${{$room->price}}</b> &nbsp;
                                @for ($i=0;$i<$room->ratings;$i++)
                                <i class="fa fa-star"></i>
                                @endfor

                                @for ($i=0;$i< 5-$room->ratings;$i++)
                                <i class="fa fa-star text-muted"></i>
                                @endfor

                            </div><br>
                            <p><span> <i class="fa fa-sun-o"></i>&nbsp;&nbsp;4 Days</span> &nbsp; &nbsp;
                                <span> <i class="fa fa-moon-o"></i>&nbsp;3 Nights</span></p>
                            <hr>
                            <div class="main-button">
                                @if ($bookedRooms !=null)
                                  @if ($bookedRooms->contains($room))
                                    <a href="#">Booked</a>  
                                  @else
                                  <a href="{{route('room.attach',['room'=>$room])}}" class="btn">Book Now</a>
                                  @endif
                                @else
                                  <a href="{{route('login')}}">Make A Reservation</a>  
                                @endif
                              </div>

                        </div>
                    </div>
                </div>
                    
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
