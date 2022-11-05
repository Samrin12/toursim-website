<x-guest-layout>
    <link rel="stylesheet" href="{{asset('assets/css/signup.css')}}">

    <section class="log-in">
        <div class="container">
            <div class="row hg">
                <div class="col-md-5 me-auto align-items-center form-page text-center ">
                    <h1>SIGN UP</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}

                        <input name="name" type="text" placeholder="Name" class="form-control">
                        <input name="age" type="number" placeholder="Age" class="form-control">
                        <input name="contact" type="text" placeholder="Contact Number" class="form-control">
                        <input name="email" type="email" placeholder="Email Address" class="form-control">
                        <input name="password" type="password" placeholder="Password" class="form-control">
                        <input name="password_confirmation" type="password" placeholder="Confirm password" class="form-control">
                        <input type="submit" value="SUBMIT">
                    </form>
                    {{-- <button type="submit">Submit</button> --}}
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>