<!DOCTYPE html>
<html>

<head>
    <title>Create fanss</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        

        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form button:hover,
        .form button:active,
        .form button:focus {
            background: #43A047;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        h1,
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .center {
            text-align: center;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            background: #ffffff;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .text-red {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="login-page">
        @if(isset($fans))
        <h1 class="center">Updatefanss</h1>
        @else
        <h1 class="center">Createfanss</h1>
        @endif
        <div class="form">
            <form class="login-form" 
            @if(isset($fans))
            action="{{ url('fans/'.$fans->id.'') }}"
            @else
            action="{{ url('fans/store') }}"
            @endif
             method="post">
                {{ csrf_field() }}
                @if(session('status'))
                <div class="text-red">{{ session('status') }}</div>
                @endif
                <input type="hidden" name="id" value="@isset($fans) {{ $fans->id }} @endisset"">
                <input type="text" placeholder="Ten" id="ten" name="ten" value="@isset($fans) {{ $fans->ten }} @endisset" />
                <span class="text-red">{{ $errors->first('ten') }}</span>
                <input type="text" placeholder="tuoi" id="tuoi" name="tuoi" value="@isset($fans) {{ $fans->tuoi }} @endisset"/>
                <span class="text-red">{{ $errors->first('tuoi') }}</span>
                <input type="hidden" placeholder="girl_id" id="girl_id" name="girl_id" value="{{ $girl_id}}"/>
                
                
                
                <br></br>
                @if(isset($fans))
                    <button class="mb-2" s style="margin-bottom: 10px;">Update</button>
                @else
                    <button class="mb-2" s style="margin-bottom: 10px;">Create</button>
                @endif
                <a href="{{ url('/girls/create') }}">
                    <button type="button">Back</button>
                </a>
                <br></br>
                <a href="{{ url('/logout' )}}">
                    <button type="button">logout</button>
                </a>
            </form>

        </div>
    </div>

</body>

</html>