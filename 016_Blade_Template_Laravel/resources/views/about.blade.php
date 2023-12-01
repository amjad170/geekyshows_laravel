<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>About</h1>

    {{-- data show in {{ carlybases }} --}}
    ID : {{ $keyid }} <br>
    Name : {{ $keyname }} <br>

    {{-- Functino Calling in {{  }} --}}
    <h2>Time function Calling = {{ time() }}</h2>

    {{-- Comment --}}

    {{-- ####Conditional Directive#### --}}

    {{-- @if --}}
    @if ($keyname == 'Amjad')
        <h1>Hello {{ $keyname }}</h1>
    @endif

    {{-- @if,@else --}}
    @if ($keyname == 'Alif')
        <h1>Hello {{ $keyname }}</h1>
    @else
        <h1>Value not match</h1>
    @endif

    {{-- @if,@elseif,@else --}}
    @if ($keyname == 'Alif')
        <h1>Hello {{ $keyname }}</h1>
    @elseif($keyname == 'Mamun')
        <h1>Value not match</h1>
    @else
        <h1>Value not match</h1>
    @endif

    {{-- @unless --}}
    @unless ($keyname == 'Sakib')
        {{-- True hole kaj korbena , False hole kaj korbe --}}
        <h2>Unless {{ $keyname }}</h2>
    @endunless

    {{-- @isset --}}
    @isset($keyname)
        {{-- $keyname er value thakle kaj korbe otherwise Not --}}
        <h2>isset {{ $keyname }}</h2>
    @endisset

    {{-- @empty --}}
    @empty($keyname)
        {{-- $keyname er value thakle kaj korbe Na otherwise  korbe --}}
        <h2>Empty {{ $keyname }}</h2>
    @endempty

    {{-- @auth --}}
    @auth
        <h1>Authenticate</h1>
    @endauth

    {{-- @auth --}}
    {{-- @auth('admin')
        <h1>Authenticate</h1>
    @endauth --}}

    {{-- @guest --}}
    @guest
        <h1>Not Authenticate</h1>
    @endguest

    {{-- @guest --}}
    {{-- @guest('admin')
        <h1>Not Authenticate</h1>
    @endguest --}}


    {{-- ### Environment Directive### --}}

    {{-- @production --}}
    @production
        <h1>This code will work production Time not develop time</h1>
    @endproduction

    {{-- @env --}}
    @env('local')
    <h1>Env local</h1>
    @endenv

    {{-- @env --}}
    @env(['local', 'stage'])
    <h1>Env local or stage</h1> {{-- now local --}}
    @endenv


    {{-- ### Switch Directive ### --}}
    {{-- @switch() --}}
    @switch('red')
        @case('green')
            <h1>This is Green</h1>
        @break

        @case('red')
            <h1>This is red</h1>
        @break

        @case('Yellow')
            <h1>This is Yellow</h1>
        @break

        @default
            <h1>Default Code</h1>
    @endswitch


    {{-- ### Loop Directive ## --}}
    {{-- @for --}}
    @for ($i = 0; $i < 10; $i++)
        <h3>{{ $i }}</h3>
    @endfor

    {{-- @foreach --}}
    <?php $arrays = ['Amjad', 'Kamal', 'Jabed']; ?>

    @foreach ($arrays as $array)
        <h3>{{ $array }}</h3>
    @endforeach

    {{-- @forelse --}}
    <?php $arrays = [80, 90, 100]; ?>

    @forelse ($arrays as $array)
        <h3>{{ $array }}</h3>
    @empty
        <h2>NO array data found</h2>
    @endforelse

    {{-- @while --}}
    <?php $i = 6; ?>

    @while ($i < 10)
        <h3>{{ $i++ }}</h3>
    @endwhile


    {{-- Break and Continue Directive --}}
    <?php $arrays = [80, 90, 100]; ?>
    {{-- @break --}}
    @foreach ($arrays as $array)
        @if ($array == 90)
        @break
    @endif
    <h1>{{ $array }}</h1>
@endforeach

{{-- breack without if condition --}}
@foreach ($arrays as $array)
    @break($array == 90)
    <h1>{{ $array }}</h1>
@endforeach



{{-- @continue --}}
@foreach ($arrays as $array)
    @if ($array == 90)
        @continue
    @endif
    <h1>{{ $array }}</h1>
@endforeach

{{-- @continue without if condition --}}
@foreach ($arrays as $array)
    @continue($array == 90)
    <h1>{{ $array }}</h1>
@endforeach

{{-- ### LOOP VARIABLE $loop->first , last etc --}}
<?php $arrays = ['1st', '2nd', '3rd']; ?>

@foreach ($arrays as $array)
    <h1>{{ $array }}</h1>
    @if ($loop->first)
        <h4>This is first Loop</h4>
    @endif

    @if ($loop->last)
        <h4>This is last Loop</h4>
    @endif

@endforeach


{{-- ### LOOP VARIABLE $loop->parent->first , last etc --}}
<?php $twoDarray = [['1st', '2nd', '3rd'],['one', 'two', 'three']]; ?>

@foreach ($twoDarray as $array)

   @foreach($array as $singleValue)
        <h1>{{ $singleValue }}</h1>
        @if($loop->parent->first)
            <h2>This is first iteration of parent Loop</h2>
        @endif
   @endforeach
    
@endforeach


</body>

</html>
