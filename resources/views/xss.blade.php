<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>IP</th>
        <th>Content</th>
    </tr>
    </thead>
    <tbody>
    @foreach($keyLoggers as $keyLogger)
        <tr>
            <td>
                {{$keyLogger->ip}}
            </td>
            <td>
                {{$keyLogger->content}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>



