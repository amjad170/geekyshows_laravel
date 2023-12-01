<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .myclass{
            color: red;
            font-size: 80px
        }
        .dclass{
            color: green;
            font-size: 80px
        }
    </style>
</head>

<body>
    <h1>Index page</h1>
    <h4>Name = {{ $name }}</h4> {{-- value pass from route --}}
    <hr>


    
    <x-include.header />
   
    @php
        $desc = "Card Description";
    @endphp

{{-- pass data --}}
    <x-card title="Cart Title" sub-title="Card Sub-Title" :description=$desc  />

    <x-card title="Cart Title TWO" sub-title="Card Sub-Title TWO" :description=$desc  />

    <x-card title="Cart Title THREE" sub-title="Card Sub-Title THREE" :description=$desc  />

    {{-- component Attributes whit not use in constructor --}}
    <x-card title="Cart Title THREE" sub-title="Card Sub-Title THREE" :description=$desc class="myclass" />


</body>

</html>
