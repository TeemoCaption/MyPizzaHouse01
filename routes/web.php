<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizza = [
        "type" => "夏威夷披薩", 
        "base"=>"洋蔥、番茄、鳳梨...",
        "price"=>300
    ];
    $pizzalist = [
        ["type" => "夏威夷披薩","base"=>"洋蔥、番茄、鳳梨...","price"=>300],
        ["type" => "大阪燒披薩","base"=>"洋蔥、番茄、鳳梨...","price"=>400],
        ["type" => "海陸雙拼披薩","base"=>"洋蔥、番茄、鳳梨...","price"=>450],
    ];

    $name = request('name');
    return view('pizzas',['pizzas'=> $pizzalist,'name'=>$name]);
});

Route::get('/pizzas/{id}', function ($id) {
    return view('details',['id'=> $id]);
});
