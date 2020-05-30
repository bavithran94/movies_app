@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img src="{{$actor['profile_path']}}" alt="profile image" class="w-76">
            <ul class="flex items-center mt-4">
                @if ($social['facebook'])
                <li>
                    <a href="{{$social['facebook']}}" title="Facebook">
                        <svg class="bi bi-gem fil-current text-gray-400 hover:text-white w-6" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if ($social['instagram'])
                <li class="ml-6">
                    <a href="{{$social['instagram']}}" title="Instagram">
                        <svg class="bi bi-gem fil-current text-gray-400 hover:text-white w-6" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if ($social['twitter'])
                <li class="ml-6">
                    <a href="{{$social['twitter']}}" title="Twitter">
                        <svg class="bi bi-gem fil-current text-gray-400 hover:text-white w-6" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if ($actor['homepage'])
                <li class="ml-6">
                    <a href="{{$actor['homepage']}}" title="Website">
                        <svg class="bi bi-gem fil-current text-gray-400 hover:text-white w-6" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z" />
                        </svg>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">{{$actor['name']}}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <svg class="bi bi-calendar-fill fil-current text-gray-400 hover:text-white w-4" viewBox="0 0 16 16"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z" />
                    <path d="M2 1a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2H2zm14 4H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5z" />
                </svg>
                <span class="ml-2">{{ $actor['birthday'] }} ({{$actor['age']}} years old) in
                    {{$actor['place_of_birth']}}</span>
                <span class="mx-2">|</span>
                <span>More Stuff</span>
            </div>
            <p class="text-gray-300 mt-8">
                {{ $actor['biography'] }}
            </p>

            <h4 class="font-semibold mt-12">Known For</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                @foreach ($knownForMovies as $movie)
                <div class="mt-4">
                    <a href="{{$movie['linkToPage']}}">
                        <img src="{{$movie['poster_path']}}" alt="poster"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <a href="{{$movie['linkToPage']}}"
                        class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">{{$movie['title']}}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="movie-credits border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Credits</h2>
        <ul class="list-disc leading-loose pl-5 mt-8">
            @foreach ($credits as $credit)
            <li> {{ $credit['release_year'] }} &middot; <strong>{{ $credit['title']}} </strong> as
                {{ $credit['character'] }}
            </li>
            @endforeach
        </ul>
    </div>
</div>


@endsection