<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class Listing {
    public static function all(): array {
        return [
            [
                'location' => '60647',
                'type' => 'offer',
                'category' => 'pencil',
                'id' => 1,
            ],
            [
                'location' => '60647',
                'type' => 'offer',
                'category' => 'bookbag',
                'id' => 2
            ],
            [
                'location' => '60647',
                'type' => 'offer',
                'category' => 'pencil',
                'id' => 3,
            ],
        ];
    }
}



Route::get('/', function () {
    return view('home', ['supplies' => Listing::all()]);
});


Route::get('/about', function() {
    return view('about');
});

Route::get('/listing/borrow/{id}', function($id) {

       $listing = Arr::first(Listing::all(), fn($supply) => $supply['id'] == $id);

    return view('/listing/borrow', ['listing' => $listing]);
});

