<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tour List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('tour.store') }}" enctype="multipart/form-data">
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
                                
                        <!-- Duration -->
                        <div class="mt-4">
                            <x-input-label for="duration" :value="__('Duration')" />
                
                            <x-text-input id="duration" class="block mt-1 w-full" type="text" name="duration" :value="old('duration')" required autofocus />
                
                            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                        </div>
                
                        <!-- Promo -->
                        <div class="mt-4">
                            <x-input-label for="promo" :value="__('Promo')" />
                
                            <x-text-input id="promo" class="block mt-1 w-full" type="text" name="promo" :value="old('promo')" required autofocus />
                
                            <x-input-error :messages="$errors->get('promo')" class="mt-2" />
                        </div>


                        <!-- Image File Upload -->
                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Upload Image')" />
                
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
                
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                
                
                        <!-- Description -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />

                            <textarea id="about" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Tour Description"></textarea>

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center mt-4">
                            <x-primary-button class="">
                                {{ __('Create New Tour') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
