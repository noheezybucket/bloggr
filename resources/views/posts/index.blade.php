@extends('app')
@section('title', 'All Posts')

@section('content')
    <div class="centered-margin space-y-5">
        <div class="flex justify-between items-end">
            <h1 class="title">All Posts</h1>
            <form action="{{ route('search-post') }}" method="GET" class="flex gap-2 w-1/2">
                @csrf
                <input type="text" name="search" placeholder="Search for a post">
                <button type="submit" class="btn-primary">
                    Search
                </button>
            </form>
            <a href="{{ route('create-post') }}" class="btn-primary">Create a post</a>
        </div>
        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif
        <div class="grid auto-rows-[192px]  grid-cols-3 gap-5">
            @foreach ($posts as $post)
                <div
                    class="border rounded-lg p-2 shadow-md  space-y-2 bg-primary text-white {{ $post->id === 2 || $post->id === 6 ? 'col-span-2' : '' }}">
                    {{-- <img src="{{ asset('assets/default.jpg') }}" alt="" class=" w-full object-cover"> --}}
                    <h2 class="blog-title">{{ $post->title }}</h2>
                    <p class="text-justify">{{ $post->content }}²</p>
                    <span>{{ $post->created_at }}</span>
                    <div class="flex justify-between items-center">
                        <span class="font-bold mr-1 flex items-center gap-2">
                            <span class="h-2 w-2 bg-white inline-block rounded-full"></span>
                            {{ $post->category->category_name }}
                        </span>
                        <span class="font-bold inline-block">noheezybucket</span>
                    </div>
                    <a href="{{ route('unique-post', ['id' => $post->id]) }}" class="btn-form block">Read the post...</a>
                </div>
            @endforeach

        </div>

    </div>
    <div class="centered-margin pt-5">
        {{ $posts->links() }}
    </div>

    {{-- {{ $posts->links }} --}}
@endsection
