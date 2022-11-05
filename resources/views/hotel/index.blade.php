<x-guest-layout>
    <link rel="stylesheet" href="{{asset('assets/css/hotels.css')}}">


    <section class="header1">

        <h3 class="title1" style="color: white; padding: 7px; font-size: 20px;">KEEP CALM AND TRAVEL ON</h3>

    </section><br><br>

    <section class="section2">
        <h1 style="text-align: center;">HOTELS AND ACCOMODATIONS</h1>
        <div class="sec">

            <div class="row">
                @foreach ($hotels as $hotel)
                <div class="col-4">

                    <div class="card">
                        <img src="{{$hotel->media[0]->getUrl()}}" alt="pix" class="img">
                        <div class="cont">
                            <h4><b>{{$hotel->name}}</b></h4>
                            <p>{{$hotel->location}}</p>
                            <hr>
                            <div class="location">
                                @for ($i=0;$i<$hotel->rating;$i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                            </div>

                            <a href="{{route('hotel.room.index', ['hotel'=>$hotel])}}" class="btn">View Suites & Details &#8594;</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

        </div>

    </section>

</x-guest-layout>
