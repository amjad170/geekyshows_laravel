<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    {{-- get content from child view and show --}}
    @yield('page_name')
    @yield('page_banner')
    @yield('page_main')

    {{-- Send and Show Default content from parent view to child view --}}
    @section("default_content")
        <h2>I am Default Content from Parent extents view</h2>
    @show

    
    
</body>
</html>