<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,00'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,00'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$30,00'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,00'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,00'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$30,00'
        ]
    ];

    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);

    dd($jobs);

    return view('Jobs');
});

Route::get('/contact', function () {
    return view('contact');
});