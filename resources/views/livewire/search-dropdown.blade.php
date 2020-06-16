<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1
    focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <svg class="w-4 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="gray"
                d="M495 466.2L377.2 348.4a206.6 206.6 0 10-28.9 28.9L466.1 495a20.4 20.4 0 0028.9-28.8zm-277.5-83.3C126.2 382.9 52 308.7 52 217.5S126.2 52 217.5 52C308.7 52 383 126.3 383 217.5s-74.3 165.4-165.5 165.4z" />
            </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if (strlen($search) > 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b bg-gray-700">
                            <a href="{{ route('movies.show', $result['id']) }}" class="block
                            hover:bg-gray-700 px-3 py-3 flex items-center">
                            @if ($result['poster_path'])
                                <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                            @else
                                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                            @endif
                            <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
