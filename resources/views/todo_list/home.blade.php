<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
        <title>Listagem de tarefas</title>
</head>
<body>
    <div class="container">
        <div class="card-list">
            <h1>Lista de tarefas</h1>
            <h3>
                <x-alert/>
            </h3>
            <a href="/create">
                <button class="create-button">
                    Criar nova tarefa
                </button>   
            </a>
        </div>
        @foreach($todos as $todo)
            <div class="container-todo">
                @if($todo->Completed)
                    <span class="title-todo-completed">{{$todo->Title}}</span>
                @else 
                    <span class="title-todo">{{$todo->Title}}</span>
                @endif
                    <a href="{{asset('/' . $todo->id . '/edit')}}">
                        <button class="update-button">Editar</button>
                    </a> 
                    <a href="{{asset('/' . $todo->id . '/completed')}}">
                        <button class="complete-button">Concluir</button>
                    </a>
                    <a href="{{asset('/' . $todo->id . '/delete')}}">
                        <button class="delete-button">Deletar</button>
                    </a>
            </div>
        @endforeach   
    </div>
</body>
</html>