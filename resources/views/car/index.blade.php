<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car Request List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-1">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-5 mx-auto">
                            <div class="-my-8 divide-y-2 divide-gray-100">
                                @foreach ($cars as $car)
                                <div class="py-8 flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                      <span class="font-semibold title-font text-gray-700">User Name: {{$car->user->name}}</span>
                                      <span class="mt-1 text-gray-500 text-sm">Phone: {{$car->user->contact}}</span>
                                    </div>
                                    <div class="md:flex-grow">
                                      <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">From: {{$car->pickup}} > To: {{$car->destination}}</h2>
                                      {{-- <p class="leading-relaxed">{{$car->description}}</p> --}}
                                      {{-- <a href="{{route('car.create', ['car'=>$car])}}" class="text-indigo-500 inline-flex items-center mt-4">Update
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M5 12h14"></path>
                                          <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                      </a> --}}

                                      
                                      {{-- <a class="text-indigo-500 inline-flex items-center mt-4 ml-5">Delete
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M5 12h14"></path>
                                          <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                      </a> --}}
                                    </div>
                                  </div>        
                                @endforeach
                                
                          </div>
                        </div>
                      </section>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
