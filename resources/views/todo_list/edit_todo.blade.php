<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/edit.css') }}" rel="stylesheet">
    <title>Editar tarefa</title>
   
</head>
<body>
    <div class="card-update">
    <h1>Editar tarefa</h1>
    <h3>
        <x-alert/> 
        <h4> Máximo de 255 caracteres. </h4>
    </h3>
        <form action="/update" method="post">
            @csrf
            @method('patch')
            <input type="text" name="title" value="{{$todo->Title}}" class="input-todo" />
            <input style="display:none;" type="number" name="id" value="{{$todo->id}}">
            <button type="submit" class="update-button">Atualizar</button>
        </form>
        <br>
        <a href="/home"><button class="button-back">Voltar</button></a>
    </div>
</body>
</html>