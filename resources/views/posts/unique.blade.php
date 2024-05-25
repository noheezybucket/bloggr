@extends('app')
@section('title', '{{ $post->title }}')

@section('content')
    <div class="centered-margin">
        <div class="flex justify-end gap-2">

            <a href="{{ route('update-post', ['id' => $post->id]) }}" class="bg-yellow-400 text-white p-2 rounded-lg">Update
                post</a>
            <a href="{{ route('delete-post', ['id' => $post->id]) }}" class="bg-red-600 text-white p-2 rounded-lg">Delete
                post</a>

        </div>
        <img src="{{ asset('/assets/default.jpg') }}" alt="" class="w-full h-[200px] object-cover rounded-lg mt-3">
        <div class="flex justify-between items-center">
            <h1 class="title" class="mb-2">{{ $post->title }}</h1>
            <span>{{ $post->created_at }}</span>
        </div>
        <p>{{ $post->content }}</p>
    </div>
@endsection
