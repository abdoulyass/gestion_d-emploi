@extends('layouts.guest')
@section('content')
<div class="background" style="
    position: absolute;
    width: 100vw;
    height: 142vh;
    top: -82vh;
    background: rgb(17, 0, 255);
    border-radius: 64%;
    z-index: 1;
   ">
        
   </div>
        
@section('auth')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="ligne" style='display:flex; gap: 23px;'>
        <div  class="mt-4">
            <x-input-label for="firstName" :value="__('First Name')" />
            <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="name"  />
            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
        </div>
        <div  class="mt-4"> 
            <x-input-label for="lastName" :value="__('Last Name')" />
            <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="name"  />
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
        </div>
    </div>
   
    <input type="hidden" name="role" value="3">
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div  class="mt-4">
        <x-input-label for="address" :value="__('Address')" />
        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="  w-100 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" style=" width:100% ;padding-left: 43%;" >
            {{ __('Register') }}
        </x-primary-button>
    </div>
    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>
</form>
@endsection
   

 