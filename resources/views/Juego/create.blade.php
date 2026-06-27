<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Games</h1>

<form action="{{route('games.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    date game:
    <br>
    <input type="date" name="date">
</label>
<br>
<label>
    goals del equipo local:
    <br>
    <input type="number" name="local_goals">
</label>
<br>

<label>
    goals del equipo visitante:
    <br>
    <input type="number" name="away_goals">
</label>
<br>

<button type="submit">Enviar Formulario:</button>
</form>

   
</body>
</html>
