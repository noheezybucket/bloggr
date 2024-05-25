@extends('app')
@section('title', 'Search results')

@section('content')
    <div class="centered-margin space-y-5">
        <div class="flex justify-between items-end">
            <h1 class="title">Résultats de recherche</h1>
            <form action="{{ route('search-post') }}" method="GET" class="flex items-center gap-2 w-1/2">
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
        <div class="grid grid-cols-3 gap-5">
            @foreach ($posts as $post)
                <div class="border rounded-lg p-2 shadow-md  space-y-3 bg-primary text-white">
                    {{-- <img src="{{ asset('assets/default.jpg') }}" alt="" class=" w-full object-cover"> --}}
                    <h2 class="blog-title">{{ $post->title }}</h2>
                    <p class="text-justify">{{ $post->content }}²</p>
                    <div class="flex justify-between">
                        <span>{{ $post->created_at }}</span>
                        <span class="font-bold">noheezybucket</span>
                    </div>
                    <a href="{{ route('unique-post', ['id' => $post->id]) }}" class="btn-form block">Read the post...</a>
                </div>
            @endforeach

        </div>

    </div>


@endsection
