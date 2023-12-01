<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--####### Bootstrap CDN CSS ##########-->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{--##### External bootstrap css from public folder #######--}}
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}"> --}}

    {{--##### Compile bootstrap css from resources -> public folder #######--}}
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('css/app.css') }}"> --}}


</head>

<body>
    <br><br>

    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>

    <button type="button" class="btn btn-link">Link</button>


    <br><br>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </div>






    {{--######### Dont Use both 3  together #######--}}

    <!--####### Option 1: Bootstrap CDN Bundle with Popper ########-->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}

    {{--######## External bootstrap js from public folder ########--}}
    {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
    {{-- <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script> --}}

    {{--######## Compile bootstrap js from resources -> public folder ########--}}
    {{-- <script src="js/app.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ url('js/app.js') }}"></script> --}}

</body>

</html>
