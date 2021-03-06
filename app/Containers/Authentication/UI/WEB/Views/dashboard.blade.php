<!DOCTYPE html>
<html>
<head>
    <title>Apiato</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 100px;
            color: #00bdf4;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="title">Welcome Admin</div>
            <h1>{{$email}}</h1>
            <div>
                <h1><a href="{{ url('/car/index') }}">Car page</a></h1>
                <h2> <a href="{{ url('/logout' )}}">Logout</a></h2>
                <a href="{{ url('/girls') }}">Girls</a>
            </div>
        </div>
    </div>
</body>
</html>