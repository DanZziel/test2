<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    public function liste(){
        return view("home", ["todos" => Todos::all()]);
    }

    public function saveTodo(Request $request){
        $texte = $request->input('texte');
    
        if($texte){
          $todo = new Todos();
          $todo->texte = $texte;
          $todo->termine = 0;
          $todo->save();
        }
    
        return redirect("/");
    }
}
