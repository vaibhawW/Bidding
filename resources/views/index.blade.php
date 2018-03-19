<!doctype html>
<html lang="en">
<head>
    <title>Players Profile</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta content="authenticity_token" name="csrf-param" />
    <meta content="{{csrf_token()}}" name="csrf-token" />
</head>
<body>
<div id="app">
    <vs-main></vs-main>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>