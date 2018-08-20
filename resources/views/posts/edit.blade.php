@extends('layouts.cleanblog')

@section('title', 'Edit post')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('img/post-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{ isset($head) ? $head : 'Edit Post' }}</h1>
                        <span class="subheading">Editovanie existujuceho postu.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('post.update',$post->id) }}" method="post" id="editPost" novalidate>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @include('posts.form')
                </form>

            </div>
        </div>

    </div>

@endsection
