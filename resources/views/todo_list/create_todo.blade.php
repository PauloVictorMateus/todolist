<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/create.css') }}" rel="stylesheet">
    <title>Criar Tarefa</title>
</head>
<body>
    <div class="card-create">
    <h1>Criar Tarefa</h1>
    <h3>
        <x-alert />
    </h3>
        <form action="/upload" method="get">
            <input class="input-todo" type="text" name="title"/>
            <button class="create-button" type="submit">Criar</button>
        </form>
        <br>
        <a href="/home"><button class="button-back">Voltar</button></a>
    </div>
</body>
</html>