@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="/img/parasite.jpg" alt="parasite" class="w-64 md:w-96">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <span>
                    <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 427 427">
                        <path d="M213 10l66 134 148 21-107 104 25 147-132-69-132 69 26-147L0 165l147-21z" /></svg>
                </span>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Feb 20, 2020</span>
                <span class="mx-2">|</span>
                <span>Action, Thriller, Drama</span>
            </div>

            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id doloremque voluptates illo, ipsum
                similique dicta earum autem? Praesentium qui laboriosam, unde doloremque eos consectetur, nihil
                corporis, aspernatur recusandae perspiciatis similique cupiditate saepe at facere odio eveniet ab minus
                inventore sed molestiae ducimus tempora? Aspernatur cumque consequatur quia temporibus minus.
            </p>

            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Bong Joon-ho</div>
                        <div class="text-sm text-gray-400">Screenpla, Director, Story</div>
                    </div>
                    <div class="ml-8">
                        <div>Han Jin-won</div>
                        <div class="text-sm text-gray-400">Screenplay</div>
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5
                py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                    <svg class="w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <path d="M70 48L40 29a2 2 0 00-3 1v39a1 1 0 003 1l30-19a1 1 0 000-3zM41 66V33l25 17-25 16z" />
                        <path d="M50 7a43 43 0 100 86 43 43 0 000-86zm0 83a40 40 0 110-81 40 40 0 010 81z" /></svg>
                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>
        </div>
    </div>
</div>
{{-- end movie-info --}}

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor</a>
                    <div class="text-gray-400 text-sm">
                        Actor's name
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor</a>
                    <div class="text-gray-400 text-sm">
                        Actor's name
                    </div>
                </div>
            </div><div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor</a>
                    <div class="text-gray-400 text-sm">
                        Actor's name
                    </div>
                </div>
            </div><div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor</a>
                    <div class="text-gray-400 text-sm">
                        Actor's name
                    </div>
                </div>
            </div><div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor</a>
                    <div class="text-gray-400 text-sm">
                        Actor's name
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image.png" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image.png" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image.png" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image.png" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image.png" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image.png" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
