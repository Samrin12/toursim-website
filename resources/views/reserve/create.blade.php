<x-guest-layout>
    
    <link rel="stylesheet" href="{{asset('assets/css/tour.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <div class="second-page-heading">
        <div class="container">
            <div class="row">
        <div class="col-lg-12">
            <h4>Book Prefered Deal Here</h4>
          <h2>Make Your Reservation</h2>
          <p>Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours.</p>
          <div class="main-button"><a href="about.html">Discover More</a></div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="info-item">
                <i class="fa fa-phone"></i>
            <h4>Make a Phone Call</h4>
            <a href="#">+088-01715*200000</a>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="#">tourbup@email.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
              <i class="fa fa-map-marker"></i>
              <h4>Visit Our Office </h4>
              <a href="#">Mirpur Dohs, Dhaka</a>
          </div>
        </div>
    </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    
            </div>
        <div class="col-lg-12">
          <form id="reservation-form" name="gs" method="POST" action="{{route('reserve.store')}}">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <h4>Make Your <em>Reservation</em> Through This <em>Form</em></h4>
            </div>
            <div class="col-lg-6">
                <fieldset>
                    <label for="Name" class="form-label">Your Name</label>
                      <input type="text" name="name" class="Name" placeholder="Ex. Neha Khan" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Your Phone Number</label>
                    <input type="text" name="contact" class="Number" placeholder="Ex. +xxx xxx xxx" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="chooseGuests" class="form-label">Number Of Guests</label>
                      <select name="number_of_guests" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4+</option>
                      </select>
                    </fieldset>
                </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Check In Date</label>
                    <input type="date" name="check_in" class="date" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <label for="chooseDestination" class="form-label">Choose Your Destination</label>
                      <select name="tour_id" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                        @foreach ($tours as $tour)
                          <option value="{{$tour->id}}" {{$tour->id == $id->id ? 'selected':''}}>{{$tour->name}}</option>              
                        @endforeach  
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button type="submit" class="main-button">Make Your Reservation Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</x-guest-layout>