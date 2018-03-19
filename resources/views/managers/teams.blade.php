<!doctype html>
<html lang="en">
<head>
    <title>Create Managers</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset("css/app.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
</head>
<body class="bg-light">
<div id="app">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Manager</th>
            <th scope="col">Players</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $manager=>$players)
            <tr>
                <th class="thead-dark">{{$manager}}</th>
                <td>
                @foreach($players as $player)
                    <span>{{$player->name}}</span>,
                @endforeach
                </td>
            </tr>
        @endforeach
    </table>

</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>