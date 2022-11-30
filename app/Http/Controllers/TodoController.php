<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    public function home(){
        $todos = Todo::orderBy('completed')->get();
        return view('todo_list.home')->with(['todos' => $todos]);

    }
    public function create(){
        return view('todo_list.create_todo');
    }
    public function upload(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $todo = $request->title;
        Todo::create([
            'title' => $todo
        ]);
        return redirect()->back()->with('success', 'Tarefa criada com sucesso!');
    }
    public function edit($id){
        $todo = Todo::find($id);
        return view('todo_list.edit_todo')->with(['id' => $id, 'todo' => $todo]);
    }
    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title' => $request->title]);
        return redirect('/home')->with('success', "Lista editada com sucesso!");
    }
 
    public function completed($id){
        $todo = Todo::find($id);
        if ($todo->Completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', "A tarefa selecionada não está concluída!");
        }else {
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', "A tarefa selecionada está concluida!");
        }
    }
    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success', "Tarefa deletada com sucesso!");
    }
}
