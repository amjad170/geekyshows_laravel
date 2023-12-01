<div>
    <h1>Card component Page</h1>
    <h2>{{ $title }}</h2>
    <h2>{{ $subTitle }}</h2>
    <h2>{{ $description }}</h2>
    <h2>{{ $number(20) }}</h2>
    <div {{ $attributes }}>Hello</div>
    <div {{ $attributes->merge(['class'=>'dclass'])}}>Hello</div>
</div>
<hr>