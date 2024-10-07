<?php

namespace app\models;

class job{
    public static function all (): array
    {
            return [
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
    }

    public static function find(int $id): array
    {
        $job = \Illuminate\Support\Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) abort(404);
        
        return $job;
    }
}