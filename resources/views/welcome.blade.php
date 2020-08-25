@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/Pizza2.png" height="400" alt="PizzaLogo">
        <div class="title m-b-md">
            Pizza House
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <div class="links">
            <a href="/">Home</a>
            <a href="{{ route('pizzas.index') }}">All Orders</a>
            <a href="{{ route('pizzas.create') }}">Create Pizza Order</a>
            <a href="https://blog.laravel.com">Blog</a>
        </div>
    </div>
</div>
@endsection
