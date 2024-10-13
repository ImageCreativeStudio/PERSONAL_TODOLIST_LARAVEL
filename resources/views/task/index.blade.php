<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicación Todo List - Laravel</title>
</head>
<body>
    
    <form action="{{ url('/') }}" method="post">
        @csrf
        <input type="text" name="task" id="task">
        
        <input type="submit" value="Agregar tarea">
        
    </form>

    <br>

    <table border="1" class="table border table-striped table-responsive">

        <tr>
            <td> Nombre de la tarea </td>
            <td> Acción </td>
        </tr>
    @foreach ($tasks as $task)
        <!-- Mostrar todos los registros de tareas -->
        <tr>
            <td> {{ $task->task }} </td>
            <td> X </td>
        </tr>    
    @endforeach

    </table>

</body>
</html>