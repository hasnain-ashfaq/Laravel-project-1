
@section('main-heading')
Bootstrap Inline Form
@endsection
@section('main-content')

In an inline form, all of the elements are inline, left-aligned, and the labels are alongside.

Note: This only applies to forms within viewports that are at least 768px wide!

Additional rule for an inline form:

Add class .form-inline to the <form> element
The following example creates an inline form with two input fields, one checkbox, and one submit button:

@endsection

@section('main-content')





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>@yield('main-heading')</h1>
<p>@yield('main-content')</p>

<a href="2nd">go</a>
</body>
</html>