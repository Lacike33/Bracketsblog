@extends('layouts.cleanblog')

@section('title','New post')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('img/post-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Zadanie</h1>
                        <span class="subheading">Vypracovanie zadania v Laravel 5.6.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row justify-content-center">
            <h1>New post</h1>
        </div>
    </div>

@endsection
