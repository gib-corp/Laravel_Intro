<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [
            [
                "id" => 1,
                "title" => "Creative Director",
                "salary" => "$5,000,00"
            ],
            [
                "id" => 2,
                "title" => "Web Developer",
                "salary" => "$2,000,00"
            ],
            [
                "id" => 3,
                "title" => "Coach",
                "salary" => "$1,730,00"
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            "id" => 1,
            "title" => "Creative Director",
            "salary" => "$5,000,00"
        ],
        [
            "id" => 2,
            "title" => "Web Developer",
            "salary" => "$2,000,00"
        ],
        [
            "id" => 3,
            "title" => "Coach",
            "salary" => "$1,730,00"
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', [
        "job" => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
