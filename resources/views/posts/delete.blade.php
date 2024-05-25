@extends('app')
@section('title', 'Delete a post')

@section('content')
    <div class="centered-margin space-y-5 mb-10">
        <div class="flex justify-between">
            <h1 class="title">Delete post</h1>
            <a href="{{ route('all-posts') }}" class="btn-primary">Back to posts</a>
        </div>
        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
        <div class="rounded-lg py-5 bg-primary">
            <form action="{{ route('delete-post-process', ['id' => $post->id]) }}" method="POST">
                @csrf
                @method('DELETE')

                <input type="text" name="title" value="{{ $post->title }}" disabled>
                <textarea name="content" cols="30" rows="10" class="w-full" disabled>
                    {{ $post->content }}
                </textarea>
                <button type="submit" class="btn-form">Delete the post</button>
            </form>
        </div>
    </div>
@endsection
