<?php

use App\Http\Controllers\TodoController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

# POST 127.0.0.1:8000/api/todos -> 404
# GET 127.0.0.1:8000/api/todos -> 200
Route::get("/todos", [TodoController::class, "list"]);
Route::get("/todos/done", [TodoController::class, "done"]);
Route::get("/todos/create", [TodoController::class, "create"]);
Route::get("/todos/{id}", [TodoController::class, "show"]);
