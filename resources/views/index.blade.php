<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Categorias</h1>

    @foreach($categories as $category)
        <p> {{ $category->name }} </p>
    @endforeach


</body>
</html>