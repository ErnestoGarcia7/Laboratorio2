<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>estudiantes.</title>
</head>
<body class="bg-warning p-2" style="--bs-bg-opacity: .4;">

    <div id="body" class="bg-dark p-2" style="--bs-bg-opacity: .2;">
<div class="alert alert-warning text-center" role="alert">
    <h1>Estudiantes.</h1>
</div>
<br>
<a class="btn btn-warning"  href="{{ url('/estudiante/create') }}" role="button"> Registrar  nuevo estudiante.</a>
<br>
<br>
<table class="table table-success table-hover table-bordered border-dark text-center">
    <thread>
        <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th> 
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th colspan="2" >Acciones</th>
</tr>
    </thread>
    <tbody>
        @foreach ($estudiantes as $estudiante)
        <<tr>
            <td>{{ $estudiante->id }}</td>
            <td>{{ $estudiante->codigo }}</td>
            <td>{{ $estudiante->nombre }}</td>
            <td>{{ $estudiante->apellido }}</td>
            <td>{{ $estudiante->direccion}}</td>
            <td>{{ $estudiante->telefono }}</td>
            <td>{{ $estudiante->correo }}</td>
            <td>
                <a class="btn btn-outline-success" href="{{ url('/estudiante/' .$estudiante->id. '/edit') }}" role="button">Editar</a>
</td>
<td>
    <form action="{{ url('/estudiante/' .$estudiante->id) }}" method="POST">
        @csrf 
        {{ method_field('DELETE') }}
        <input type="submit" class="btn btn-outline-danger" value="Eliminar"
         onclick="return confirm('¿Realmente desea eliminar el registro?')">
</form>
</td>
</tr>
        @endforeach
</tbody>
</table>
</div>

<style>
#body
{
margin-left:2%;
margin-right:2%;
margin-top:2%;
margin-bottom:2%;
border-radius:0.5em;
}
</style>