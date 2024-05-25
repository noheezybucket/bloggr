@extends('app')
@section('title', 'Create a category')

@section('content')
    <div class="centered-margin space-y-5 mb-10">
        <div class="flex justify-between">
            <h1 class="title">Create category</h1>
            <a href="{{ route('all-categories') }}" class="btn-primary">Back to categories</a>
        </div>
        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
        <div class="rounded-lg py-5 bg-primary">
            <form action="{{ route('create-category-process') }}" method="POST">
                @csrf

                <input type="text" name="category_name" placeholder="Category name here">
                <button type="submit" class="btn-form">Add the category</button>
            </form>
        </div>
    </div>
@endsection
