<div class="relative mt-3 md:mt-0 ml-4" x-data="{isOpen: true}" @click.away="isOpen = false">
    <input wire:model.debounce.500ms="search" type="text"
        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
        placeholder="Search" x-ref="search" @keydown.window="
        if(event.keyCode ==191){
            event.preventDefault();
            $refs.search.focus();
        }
        " @focus="isOpen = true" @keydown.escape.window="isOpen = false" @keydown.shift.tab="isOpen = false"
        @keydown="isOpen = true">
    <div class="absolute top-0">
        <svg class="bi bi-search w-4 fill-current text-gray-500 mt-2 ml-2" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
            <path fill-rule="evenodd"
                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
        </svg>
    </div>
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if(strlen($search) >= 2)
    <div class="absolute bg-gray-800 rounded w-64 mt-4" x-show.transition.opacity="isOpen">
        @if ($searchResults->count() > 0)
        <ul>
            @foreach ($searchResults as $result)
            <li class="border-b border-gray-700">
                <a href="{{route('movies.show', $result['id'])}}"
                    class="block hover:bg-gray-700 px-3 py-3 flex items-center" @if ($loop->last) @keydown.tab="isOpen =
                    false"

                    @endif
                    >
                    @if ($result['poster_path'])
                    <img src="{{'https://image.tmdb.org/t/p/w92/'.$result['poster_path']}}" alt="poster" class="w-8">
                    @else
                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                    @endif
                    <span class="ml-4">{{$result['title']}}</span>
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <div class="px-3 py-3">No results for *{{$search}}</div>
        @endif
    </div>
    @endif

</div>