<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feladatok</title>
</head>
<body>
    <h1>Feladatok listája</h1>
    
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
    
    <div>{{ $foo }}</div>
</body>
</html>