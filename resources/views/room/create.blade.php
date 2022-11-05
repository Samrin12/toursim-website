<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Room List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('hotel.room.store', ['hotel'=>$hotel]) }}" enctype="multipart/form-data">
                        @csrf
                
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                                                        
                        <!-- price -->
                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Price')" />
                
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required autofocus />
                
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                                                        
                        <!-- days -->
                        <div class="mt-4">
                            <x-input-label for="days" :value="__('Days')" />
                
                            <x-text-input id="days" class="block mt-1 w-full" type="number" name="days" :value="old('days')" required autofocus />
                
                            <x-input-error :messages="$errors->get('days')" class="mt-2" />
                        </div>

                                                        
                        <!-- nights -->
                        <div class="mt-4">
                            <x-input-label for="nights" :value="__('Nights')" />
                
                            <x-text-input id="nights" class="block mt-1 w-full" type="number" name="nights" :value="old('nights')" required autofocus />
                
                            <x-input-error :messages="$errors->get('nights')" class="mt-2" />
                        </div>
                
                                
                        <!-- Rating -->
                        <div class="mt-4">
                            <x-input-label for="ratings" :value="__('Ratings')" />
                
                            <x-text-input id="ratings" class="block mt-1 w-full" type="number" name="ratings" :value="old('ratings')" required autofocus />
                
                            <x-input-error :messages="$errors->get('ratings')" class="mt-2" />
                        </div>
                

                        <!-- Image File Upload -->
                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Upload Image')" />
                
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
                
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center mt-4">
                            <x-primary-button class="">
                                {{ __('Create New Room') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>