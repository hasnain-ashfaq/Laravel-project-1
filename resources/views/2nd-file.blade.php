@extends('1st-file')
@section('main-working')
Tip: If you don't include a label for every input, screen readers will have trouble with your forms. You can hide the labels for all devices, except screen readers, by using the .sr-only class:
@endsection


<h1>@yield('main_heading')</h1>

<p>@yield('main-working')</p>

<a href="3rd">go</a>