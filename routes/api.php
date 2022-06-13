<?php

// use App\Http\Controllers\MunicipioController;
// use App\Http\Middleware\EnsureDatabaseIsAvailable;
// use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*
| Globally configured middleware in Kernel.php $routeMiddleware property
*/

// Route::middleware('databaseAvailable')
//     ->get('/municipio/{uf}', [MunicipioController::class, 'RetornarMunicipiosPorUF']);


/*
| Assigning middlewares with fully qualified name
*/

// Route::middleware(
//     [
//         EnsureTokenIsValid::class,
//         EnsureDatabaseIsAvailable::class,
//     ])
//     ->get('/municipio/{uf}', [MunicipioController::class, 'RetornarMunicipiosPorUF']);

