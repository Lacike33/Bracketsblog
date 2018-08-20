@extends('layouts.cleanblog')

@section('title',$post->title)

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('img/post-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->description }}</h2>
                        <span class="meta">Posted by <a href="{{ url('user', $post->user->id) }}">{{ $post->user->fullname }}</a>
                on {{ $post->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @can('edit-post', $post)
                    <div class="form-group">
                        <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}" >Edituj post</a>
                    </div>
                @endcan
                <div class="post-preview">
                    {!!  $post->ritchText !!}
                </div>
                <p class="post-meta">
                    <small>Writen by
                        <a href="{{ url('user', $post->user->id) }}">
                            {{ $post->user->fullname }}
                        </a>
                        /
                        <a href="mailto:{{ $post->user->email }}">
                            {{ $post->user->email }}
                        </a>/
                    </small>
                </p>
                @include('partials.tags')
            </div>
        </div>
    </div>

@endsection
