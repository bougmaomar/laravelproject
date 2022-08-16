<!-- <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"
                            >Home</a
                        >
                    </li>
                </ul>
                <form class="d-flex">
                    @if (Route::has('login'))
                    <ul class="navbar-nav">
                        @auth
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link"
                                >Log in</a
                            >
                        </li>

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link"
                                >Register</a
                            >
                        </li>
                        @endif @endauth
                    </ul>

                    @endif
                </form>
            </div>
        </div>
    </nav>
</div>
 -->
@extends('layouts.app')
