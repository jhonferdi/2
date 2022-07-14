@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            @if ($post->image)
                <div style="max-height: 200px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                </div>
            @else
            <img src="https://picsum.photos/850/200?{{ $post->category->name }}" alt="{{ $post->category->name }}">
            @endif
            <h5>by: {{ $post->user->name }} | category : <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            <p>{!! $post->body !!}</p>
            <a href="/blog">Back to Blog</a>
            {{-- kalo masukin pake <P> pake yg bawah --}}
            {{-- {!! $post->body !!}  --}} 
        </div>
    </div>
</div>

@endsection