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

    @php
        $desc = "Card Desricption";
    @endphp

    <x-cart title="Card Title 1" sub-title="Card Sub-Title 1" :description=$desc/>
    <x-cart title="Card Title 2" sub-title="Card Sub-Title 2" :description=$desc/>
    <x-cart title="Card Title 3" sub-title="Card Sub-Title 3" :description=$desc/>


</body>

</html>
