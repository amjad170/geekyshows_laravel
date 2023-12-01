<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index page</h1>
    <h4>Name = {{ $name }}</h4> {{-- value pass from route --}}
    <hr>

    @include('contact',['id'=>1001])
    
</body>
</html>