<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Lista de Tareas</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <ul class="list-group mt-3">
            @foreach ($tasks as $task)
                <li class="list-group-item">{{ $task->Tarea }}
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="float-end">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mt-3">Agregar Tarea</a>
    </div>
</body>
</html>
