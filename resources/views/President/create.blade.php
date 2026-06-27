<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presidents</title>
</head>
<body>
    <h1>Presidents</h1>

<form action="{{route('presidents.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    name:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    year:
    <br>
    <input type="number" name="year">
</label>
<br>
<button type="submit">Enviar Formulario:</button>
</form>

   
</body>
</html>
