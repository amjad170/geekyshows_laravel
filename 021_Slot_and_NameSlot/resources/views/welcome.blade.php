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
        $desc = 'Card Desricption';
    @endphp


    <x-card title="Card Title 1" sub-title="Card Sub-Title 1" :description=$desc>  {{-- pass data by attribute --}}

        <x-slot name='abc'>Name Slot Content</x-slot>  {{-- name slot --}}

        <h2>Only Slot Content111</h2>  {{-- only slot  work for all without name slot--}}
        <h2>Only Slot Content222</h2>  {{-- only slot  work for all without name slot--}}

    </x-card>

   

</body>

</html>
