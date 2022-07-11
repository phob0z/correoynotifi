<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contenido del Mail</h1>
    <br>
    Asunto: {{$msg['asunto']}}
    <br>
    Recibiste un correo de: {{$msg['nombre']}} - {{$msg['apellido']}} - {{$msg['correo']}}
    <br>
    <br>
    Detalle: {{$msg['mensaje']}}
    <br>
    <br>
    <img src="https://www.megaidea.net/wp-content/uploads/2018/07/DORAEMON-20.png" width="400" height="400"/>
</body>
</html>
