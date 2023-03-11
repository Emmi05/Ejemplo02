<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
      /*
    -index: Para mostrar todos los elemntos
    -store: Para guardar una prueba
    -update: Para actualizar
    -destroy: Para eliminar
    -edit: Para mostrar el formulario de edición
    */

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3'
        ]);
    
    $todo = new Todo;
    $todo->title = $request->title;
    $todo->save();
// re cargar la pagina 
    return redirect()->route('todos')->with('success','Tarea creada correctamente');
   
   
   // session_start();
    //$_SESSION['msj']="Tarea creada";
 }

    
    public function index(){
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function show($id){
        $todo = Todo::find($id);
        return view('todos.show', ['todo' => $todo]);
    }

    public function update(Request $request,$id){
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success', 'Actualizado correctamente');
    }

    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todos')->with('success', 'Se ha eliminado correctamente');
    }
}