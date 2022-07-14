@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>

            @if ($post->image)
                <div style="max-height: 200px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                </div>
            @else
                <img src="https://picsum.photos/800/200?{{ $post->category->name }}" alt="{{ $post->category->name }}">
            @endif
            
            <a href="/dashboard/posts" class="btn btn-primary mt-2 mb-2">Back to All My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mt-2 mb-2">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger text-decoration-none " onclick="return confirm('Apakah Anda Yakin Menghapus Post Ini?')" type="submit">Delete</button>
              </form>
            <p>{!! $post->body !!}</p>
        </div>
    </div>
</div>
@endsection