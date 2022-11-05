<x-guest-layout>
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/car.css')}}" />

    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Book a car</h1>
                        </div>
                        <form action="{{route('car.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <span class="form-label">Pickup Location</span>
                                <input name="pickup" class="form-control" type="text" placeholder="Enter ZIP/Location">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Destination</span>
                                <input name="destination" class="form-control" type="text" placeholder="Enter ZIP/Location">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <span class="form-label">Pickup Date</span>
                                        <input name="date" class="form-control" type="datetime-local" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="submit-btn">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
