<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArbolesEjemploController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/arbolesejemplo', [ArbolesEjemploController::class, 'index']);
//Route::get('/arbolesejemplo', [app\Http\Controllers\ArbolesEjemploController::class, 'index']);

Route::get('/api/test', function () {
/*    $geoJsonData = [
        "type" => "FeatureCollection",
        "features" => [
            [
                "type" => "Feature",
                "geometry" => [
                    "type" => "Point",
                    "coordinates" => [-3.70379, 40.41678] //Ejemplo de cooordenadas (lon, lat)
                ],
                "properties" => [
                    "name" => "Madrid",
                    "population" => 3223334
                ]
            ]
        ]
    ];
    */
    $geoJsonData = [
        "type" => "FeatureCollection",
        "features" => [
            [
                "type" => "Feature",
                "geometry" => [
                    "type" => "Point",
                    "coordinates" => [-2.9345263852772017, 43.245028850624685] //Ejemplo de cooordenadas (lon, lat)
                ],
                "properties" => [
                    "id"=> 1,
                    "altura"=> 20,
                    "diametro"=> 30,
                    "nombre" => "Larraskitu 2 ventana",
                ]
            ]
,
            [
                "type" => "Feature",
                "geometry" => [
                    "type" => "Point",
                    "coordinates" => [-2.934486408597113,43.24484787134856] //Ejemplo de cooordenadas (lon, lat)
                ],
                "properties" => [
                    "id"=> 2,
                    "altura"=> 34,
                    "diametro"=> 20,
                    "nombre" => "Larraskitu 2 portal",
                ]
            ]

        ]
    ];
    return response()->json($geoJsonData);
});

