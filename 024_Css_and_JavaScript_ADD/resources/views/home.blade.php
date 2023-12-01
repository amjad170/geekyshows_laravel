<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{--#### External css from public folder #####--}}
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     {{-- <link rel="stylesheet" href="{{ url('css/style.css') }}"> --}}

     {{--#### Compile External css from resource->public folder ####--}}
     <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

    {{--##### internal Css #####--}}
    <style>
        h1 {
            color: red
        }
    </style>

</head>

<body>

    {{--##### Internal css use here  ####--}}
    <h1>This is Home Page</h1>

    {{--#### External css from public folder ####--}}
    <h2>This is Home page</h2>

    {{--#### Compile External css from resource->public folder ####--}}
    <h4>This is Home page</h4>






    {{--#### Internal JavaScript ####--}}{{-- It will work first  --}}
    <script>
        alert("Internal JavaScript works")
    </script>

    {{--#### External Javascript from public folder ####--}}
    {{-- <script src="js/script.js"></script> --}}
    <script src="{{ asset('js/script.js') }}"></script>
    {{-- <script src="{{ url('js/script.js') }}"></script> --}}

     {{--#### Compile External Javascript from resource->public folder ####--}}
    <script src="{{ asset('js/script2.js') }}"></script>

</body>

</html>
