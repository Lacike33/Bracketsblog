{{--Tags--}}
@if ($post->tags)
    <p class="tags">
    @foreach($post->tags as $tag)
        <a href="{{ url('tag', $tag->id) }}" class="btn btn-outline-warning">
            <small>{{ $tag->name }}</small>
        </a>
    @endforeach
    </p>
@endif
