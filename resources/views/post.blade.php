<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
<h1>
        Lista Comentarios
        </h1>
    @foreach($posts as $p)
        <p><b> Id Post: </b> {{$p['post_id']}}</p>
        <p><b> Comentario: </b> {{$p['comment']}}</p>
    @endforeach 
    <h4>GERMAN ESTUVO AQUI :D </h4>
</body>
</html>