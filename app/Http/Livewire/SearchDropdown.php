<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;


class SearchDropdown extends Component
{

    public $search = '';

    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) > 2) {
            $searchResults = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?api_key=2ffee3fee8f4e822fd825bddd6d90bf0&language=en-US&query=' . $this->search . '&include_adult=false')
                ->json()['results'];
        }



        // dump($searchResults);

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}