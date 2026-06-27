<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goals</title>
</head>
<body>
    <h1>Goals</h1>

<form action="{{route('goals.store')}}" method="POST" enctype="multipart/form-data">

@csrf
<label>
    goal:
    <br>
    <input type="number" name="goal">
</label>
<br>

<label>
    descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br>

<button type="submit">Enviar Formulario:</button>
</form>

   
</body>
</html>
