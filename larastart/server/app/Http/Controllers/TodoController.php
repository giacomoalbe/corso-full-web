<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function list() {
        return Todo::get();
    }

    public function done() {
        return Todo::where("done", "=", 1)->get();
    }

    public function create() {
        $newTodo = new Todo();

        $newTodo->task = "Diventare qualcuno";

        $newTodo->save();

        return "ok";
    }

    public function show($id) {
        $todo = Todo::find($id);

        if ($todo != null) {
            return response($todo, 200);
        }

        return response("not_found", 404);
    }
}
