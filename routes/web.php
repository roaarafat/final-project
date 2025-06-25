<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = "roaa";
    $departments = [
        '01' => 'Tichnical',
        '02' => 'Financial',
        '03' => 'Sales'
    ];
    return view('about', compact('name', 'departments'));
});

Route::post('/about', function () {
    $name = request('name');
    $departments = [
        '01' => 'Tichnical',
        '02' => 'Financial',
        '03' => 'Sales'
    ];
    return view('about', compact('name', 'departments'));
});

Route::get('tasks', [TaskController::class , 'index']);

Route::post('create' , [TaskController::class , 'create']);

Route::post('delete/{id}' , [TaskController::class , 'destroy'] );

Route::post('edit/{id}', [TaskController::class , 'edit']);

Route::post('update', [TaskController::class , 'update']);

