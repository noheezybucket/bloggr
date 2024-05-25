@extends('app')
@section('title', 'All Posts')

@section('content')
    <div class="centered-margin space-y-5">
        <div class="flex justify-between">
            <h1 class="title">All Posts</h1>
            <a href="{{ route('create-post') }}" class="btn-primary">Create a post</a>
        </div>
        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif
        <div class="grid grid-cols-3 gap-5">
            @foreach ($posts as $post)
                <div class="border rounded-lg p-2 shadow-md space-y-2 bg-secondary">
                    <img src="{{ asset('assets/default.jpg') }}" alt="" class=" w-full object-cover">
                    <h2 class="blog-title">{{ $post->title }}</h2>
                    <p>{{ $post->content }}²</p>
                    <a href="{{ route('unique-post', ['id' => $post->id]) }}" class="text-primary">Read the post...</a>
                </div>
            @endforeach
        </div>

    </div>

    {{-- {{ $posts->links }} --}}
@endsection
