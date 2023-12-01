@extends('layouts.adminLayout')

@section('title',"Contact")

@section("page_name")
<h1>Contact Page</h1>
<hr>
@endsection

@section("page_banner")
<h1>Contact Page Banner</h1>
<hr>
@endsection

@section("page_main")
<h1>Main content Here</h1>
@endsection

{{-- I Override Default Content from Parent extents view --}}
    {{-- @section('default_content')
        <h2>I Override Default Content from Parent extents view</h2>
    @endsection --}}


{{-- I am Default Content from Parent extents view and Add More --}}
@section('default_content')

@parent

<h2>I am Default Content from Parent extents view and Add More</h2>

@endsection
