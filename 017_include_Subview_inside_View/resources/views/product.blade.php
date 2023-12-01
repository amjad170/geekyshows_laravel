<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $name }} Product Page</h1>
    <hr>

    {{-- @include('mobile',['totan_mobile'=>5]) --}}

    {{--### if view file exist ###--}}
    {{-- @includeIf('mobigle',['totan_mobile'=>5])   --}}

    {{--### true hole kaj korbe ###--}}
    {{-- @includeWhen($userType,'mobile',['totan_mobile'=>5])  --}}

    {{--### true hole kaj korbena ###--}}
    {{-- @includeUnless($userType,'mobile',['totan_mobile'=>5])  --}}

    {{-- foreach use for loop;; alternative @each --}}   {{--@include('student') == <h4>{{ $student }}</h4> --}}

    {{-- @foreach($students as $student)
            @include('student')                                         
    @endforeach --}}

    {{--### view and Loop together ###--}}
    @each('student', $students, 'student', 'emptyStudent')




    {{-- @once
        <h1>Evaluted only One</h1>
    @endonce --}}

   


</body>
</html>