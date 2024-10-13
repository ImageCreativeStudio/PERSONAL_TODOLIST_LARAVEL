<!doctype html>
<html lang="es">
<head>
    <title>Aplicación Todo List - LARAVEL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>

<body>
    
    <header class="bg-danger text-center text-light py-3">
        <div class="container">
            <h1>Todo List</h1>
        </div>
    </header>
    
    <main class="container my-5">
        
        <h3>Aplicación de tareas</h3>
        <p>Aplicación realizada con el framework Laravel por el Estudio de Diseño Creativo Image.</p>
        <p>Una vez escrita la tarea en el campo a continuación puede presionar la tecla enter y así podrá verla reflejada en el listado debajo del siguiente campo.</p>
        
        <div class="card">
            <div class="card-body">
                <form action="{{ url('/') }}" method="post">
                    @csrf
                    <label for="task">Tarea:</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="task" id="task" placeholder="Escriba su tarea" aria-label="task" aria-describedby="button-addon2">
                        <input class="btn btn-dark" type="submit" value="Agregar tarea">
                    </div>
                </form>
            </div>
        </div>
        
        <br>
        
        <div class="card">
            <div class="card-body">
                <table class="table border table-striped table-responsive align-middle">
                    
                    <tr>
                        <td> <h5>Nombre de la tarea</h5> </td>
                        <td> <h5 class="text-center">Acción</h5> </td>
                    </tr>
                    
                    @foreach ($tasks as $task)
                    <!-- Mostrar todos los registros de tareas -->
                    <tr>
                        <td> 
                            {{ $task->task }} 
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn mx-auto text-center btn-sm btn-outline-danger" type="submit" value="x">
                                </form>
                                </
                            </td>
                        </tr>    
                        @endforeach
                        
                    </table>
                </div>
            </div>
            
        </main>
        
        <footer>
            <div class="container-fluid text-center py-4 bg-black text-light">
                <div class="container">
                    <p>©2009-2024. IMAGE CREATIVE STUDIO</p>
                    <a class="text-decoration-none text-light" href="https://image.com.ar" target="_blank">www.image.com.ar</a></br>
                    <a class="text-decoration-none text-light" href="mailto:info@image.com.ar" target="_blank">info@image.com.ar</a>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        
    </body>
    </html>