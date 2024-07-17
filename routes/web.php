<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'Dancer',
                'salary' => 'P50,000'
            ],
            [
                'title' => 'Singer',
                'salary' => 'P50,000'
            ],
            [
                'title' => 'Butcher',
                'salary' => 'P50,000'
            ],
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
