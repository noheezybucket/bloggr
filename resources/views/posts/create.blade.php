@extends('app')
@section('title', 'Create a post')

@section('content')
    <div class="centered-margin space-y-5 mb-10">
        <div class="flex justify-between">
            <h1 class="title">Create post</h1>
            <a href="{{ route('create-post') }}" class="btn-primary">Back to posts</a>
        </div>
        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
        <div class="rounded-lg py-5 bg-primary">
            <form action="{{ route('create-post-process') }}" method="POST">
                @csrf

                <input type="text" name="title" placeholder="Post title here">
                <select type="text" name="category">
                    <option value="">Title first</option>
                    <option value="">Second first</option>
                    <option value="">Third first</option>
                </select>

                <textarea name="content" cols="30" rows="10" class="w-full"></textarea>
                <button type="submit" class="btn-form">Add the post</button>
            </form>
        </div>
    </div>
@endsection
