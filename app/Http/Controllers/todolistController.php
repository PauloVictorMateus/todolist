<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\todolist;

class todolistController extends Controller{
    public function getTodo(){
        //READ (GET)
    }
    public function postTodo(Request $request){
        //CREATE (POST)
    }
    public function updateTodo(Request $request, todolist $todolist){
        //UPDATE (PUT)
    }
    public function deleteTodo(todolist $todolist){
        //DELETE (DELETE)
    }
}