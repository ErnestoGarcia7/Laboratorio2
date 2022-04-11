<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Estudiantes.</title>
</head>
<body class="bg-warning p-2" style="--bs-bg-opacity: .4;">
    <div id="body" class="bg-dark p-2" style="--bs-bg-opacity: .2;">
<div class="alert alert-dark text-center" role="alert">
<h1>Ingresar nuevo estudiante.</h1>
</div>

<form action = "{{ url('estudiante') }}" method="post">
      
   @csrf
   @include('estudiantes.form')
</form>
</div>

<style>
#body
{
margin-left:3%;
margin-right:3%;
margin-top:3%;
margin-bottom:3%;
border-radius:0.5em;
}
</style>