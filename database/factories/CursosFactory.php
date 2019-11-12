<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Cursos;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Cursos::class, function (Faker $faker) {
    return [
        'codigo' => Str::random(10000,99999),
        'nomecurso' => 'Técnico' . Str::random(100),
        'nivel' => 'Nivel' . Str::random(50),
        'vagas' => Str::random(1,40),
        'cargahoraria' => Str::random(20, 200),
    ];
});
