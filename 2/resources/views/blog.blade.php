@extends('layouts.main')

@section('container')

<h1 class="text-center">{{ $title }}</h1>
{{-- Searching --}}
<div class="row justify-content-center mb-3">
    <div class="col-md-8">
        <form action="/blog" method="GET">
            @if (request('category'))
                <input type="hidden" name='category' value="{{ request('category') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search post" name="search" value="{{ request('search') }}">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3 text-center">
        @if ($posts[0]->image)
            <div style="max-height: 300px; overflow:hidden">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
            </div>
        @else
            <img src="https://picsum.photos/1200/300?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card-body">
            <h3 class="card-title text-dark"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <h5>By: {{ $posts[0]->user->name }} | <a href="/blog?category={{ $posts[0]->category->slug }} " class="text-decoration-none">{{ $posts[0]->category->name }}</a></h5>
            <p class="card-text">{{ $posts[0]->excerpt }}..<a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">Read More</a></p>
            <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
        </div>
    </div>

    <div class="row">
        @foreach ($posts->skip(1) as $post )
        <div class="col-md-4">
            <div class="card">
                @if ($post->image)
                    <div style="max-height: 200px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                <img src="https://picsum.photos/400/200?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                <div class="card-body">
                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                <p class="card-text">By: {{ $post->user->name }} | <a href="/blog?category={{ $post->category->slug }} " class="text-decoration-none">{{ $post->category->name }}</a></p>
                <p>{{ $post->excerpt }}..<a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More</a></p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@else
    <h3>No Post Found.</h3>
@endif

{{ $posts->links() }}

@endsection
