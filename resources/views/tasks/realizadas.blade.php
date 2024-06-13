<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas Realizadas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Tareas Realizadas</h1>
        <ul class="list-group mt-3">
            @foreach ($tasks as $task)
                <li class="list-group-item">
                    {{ $task->Tarea }} - {{ $task->Realizada ? 'Realizada' : 'No realizada' }}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
