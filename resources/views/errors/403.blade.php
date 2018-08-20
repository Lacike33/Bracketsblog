@extends('layouts.cleanblog')

@section('title','404')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('img/post-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>403</h1>
                        <span class="subheading">Je mi ľúto, ale nie si autorizovaný k tomuto úkonu.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection
