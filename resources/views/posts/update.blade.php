@extends('app')
@section('title', 'Update a post')

@section('content')
    <div class="centered-margin space-y-5 mb-10">
        <div class="flex justify-between">
            <h1 class="title">Update post</h1>
            <a href="{{ route('all-posts') }}" class="btn-primary">Back to posts</a>
        </div>
        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
        <div class="rounded-lg py-5 bg-primary">
            <form action="{{ route('update-post-process', ['id' => $post->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="text" name="title" value="{{ $post->title }}">
                <select type="text" name="category">
                    <option value="">Title first</option>
                    <option value="">Second first</option>
                    <option value="">Third first</option>
                </select>
                <textarea name="content" cols="30" rows="10" class="w-full">
                    {{ $post->content }}
                </textarea>
                <button type="submit" class="btn-form">Update the post</button>
            </form>
        </div>
    </div>
@endsection
