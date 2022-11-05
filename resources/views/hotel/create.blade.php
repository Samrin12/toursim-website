<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hotel List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('hotel.store') }}" enctype="multipart/form-data">
                        @csrf
                
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                
                        <!-- Location -->
                        <div class="mt-4">
                            <x-input-label for="location" :value="__('Location')" />
                
                            <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
                
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>
                                
                        <!-- Rating -->
                        <div class="mt-4">
                            <x-input-label for="rating" :value="__('Rating')" />
                
                            <x-text-input id="rating" class="block mt-1 w-full" type="number" name="rating" :value="old('rating')" required autofocus />
                
                            <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                        </div>
                

                        <!-- Image File Upload -->
                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Upload Image')" />
                
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
                
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center mt-4">
                            <x-primary-button class="">
                                {{ __('Create New hotel') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>