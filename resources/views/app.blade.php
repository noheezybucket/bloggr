<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header
        class="flex gap-4 justify-between items-center centered-margin py-5 border mt-2 mb-5 rounded-lg px-2 bg-primary text-white">
        <div class="flex items-center">
            {{-- <svg class="w-6 h-6 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
            </svg> --}}

            <h1 class="text-2xl font-bold">bloggr</h1>
        </div>
        <nav>
            <ul class="list-none flex gap-2 items-center font-bold">
                <li>
                    <a href="{{ route('all-posts') }}" class="text-white p-2 rounded-md">
                        posts
                    </a>
                </li>
                <li>
                    <a href="{{ route('all-categories') }}" class=" text-white p-2 rounded-md">
                        categories
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>@yield('content')</main>
    <footer class="bg-primary py-10 my-5 rounded-md centered-margin">
        <div class="centered-margin text-white">

            <div class="flex items-center justify-center">
                <h1 class="text-2xl font-bold">bloggr</h1>
            </div>
            <p class="text-center">contact@bloggr.com</p>
        </div>
    </footer>
</body>

</html>
