<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipioController;
use App\Http\Middleware\EnsureDatabaseIsAvailable;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(
    [
        EnsureDatabaseIsAvailable::class])
    ->get('/municipio/{uf}', [
    MunicipioController::class, 'RetornarMunicipiosPorUF']);

