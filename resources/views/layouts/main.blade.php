<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FilmQ</title>

    <link rel="stylesheet" href="/css/main.css">
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{{ route('movies.index') }}}">
                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M-2-4h24v24H-2z" />
                                <path fill="white"
                                    d="M20 0h-4l2 3h-3l-2-3h-2l2 3h-3L8 0H6l2 3H5L3 0H2L0 2v12l2 2h16l2-2V1 0zM9 11l-1 3-1-3-3-1 3-1 1-3 1 3 3 1-3 1zm6-3l-1 2-1-2-2-1 2-1 1-2 1 2 2 1-2 1z" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index')}}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1
                    focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">

                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
