<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/jobs', function () {
    return view('jobs', 
    [
        'jobs' => [ 
            [   
                'id' => 1,
                'title' => 'director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'progammer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'teacher',
                'salary' => '$40,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
        $jobs = [ 
            [   
                'id' => 1,
                'title' => 'director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'progammer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'teacher',
                'salary' => '$40,000'
            ]
        ];

    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

require __DIR__.'/auth.php';
