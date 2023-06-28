<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prodotti', function(){
    
    $prodotti = [
        
        [   
            "img" => "/img/magico.png",
            "name" => "Baule Magico",
            "descrizione" => "Contiene tante carte",
            "costo" => "800 gemme"
        ],
        
        [
            "img" => "/img/baulegigante.png",
            "name" => "Baule Gigante",
            "descrizione" => "Contiene tante carte e tantissimi soldi",
            "costo" => "1200 gemme"
        ],
        
        [
            "img" => "/img/epico.png",
            "name" => "Baule Epico",
            "descrizione" => "Contiene un malloppone di carte epiche",
            "costo" => "600 gemme"
        ],
    ];
        
    return view('prodotti', ["products" => $prodotti]);
});

Route::get('/squadrone', function(){
    
    $team = [
        [
            "img" => "/img/Goblin.png",
            "name" => "Goblin",
            "descrizione" => "Attaccano con il coltellino e sono brutti",
            "costo" => "2"
        ],
        
        [
            "img" => "/img/gigante.png",
            "name" => "Gigante",
            "descrizione" => "E' enorme e tanka tantissimo",
            "costo" => "5"
        ],
        
        [
            "img" => "/img/principessa.png",
            "name" => "Principessa",
            "descrizione" => "Attacca da tipo lontanissimo ma fa pochissimi danni",
            "costo" => "3"
        ],
        
        [
            "img" => "/img/barbari.png",
            "name" => "Barbari",
            "descrizione" => "5 barbari armati di ascia, forti e puzzano",
            "costo" => "5"
            ]
        ];
        
        
        
        
        
        return view('squadrone', ["squadra" => $team]);
    });
    