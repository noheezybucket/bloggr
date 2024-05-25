@extends('app')
@section('title', 'All Posts')

@section('content')
    <div class="centered-margin space-y-5">
        <div class="flex justify-between items-end">
            <h1 class="title">All Categories</h1>
            <form action="{{ route('search-category') }}" method="GET" class="flex gap-2 w-1/2">
                @csrf
                <input type="text" name="search" placeholder="Search for a post">
                <button type="submit" class="btn-primary">
                    Search
                </button>
            </form>
            <a href="{{ route('create-category') }}" class="btn-primary">Create a category</a>
        </div>
        <div class="rounded-lg overflow-hidden">
            <table class="w-full space-y-2">
                <tr class="text-center bg-primary h-10 text-white border border-primary">
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                @foreach ($categories as $category)
                    <tr class="text-center border border-primary rounded-lg ">
                        <td>
                            {{ $category->id }}
                        </td>
                        <td class="flex justify-center">
                            <img src="{{ asset('assets/default.jpg') }}" alt="" class=" w-[90px] object-cover">
                        </td>
                        <td>
                            {{ $category->category_name }}
                        </td>
                        <td>
                            <a href="{{ route('update-category', ['id' => $category->id]) }}"
                                class="bg-yellow-400 text-white p-2 rounded-lg">Update</a>
                            <a href="{{ route('delete-category', ['id' => $category->id]) }}"
                                class="bg-red-600 text-white p-2 rounded-lg">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>

@endsection
