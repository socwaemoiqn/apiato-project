<!DOCTYPE html>
<html>
<head>
    <title>Apiato</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="container">
        <div class="content">
        <form method="post" action="{{ url('/car') }}"> 
                @csrf
                @if(session('status'))
                <div class="text-red">{{ session('status') }}</div>
                @endif
                <p>
                    <label for="name">Name</label><br>
                    <input type="text" name="name" value="">
                </p>

                <p>
                    <label for="mota">mota</label><br>
                    <textarea cols="20" rows="10" name="mota"></textarea>
                </p>

                <p>
                    <button type="submit">Submit</button>
                </p>
</form>
        </div>
    </div>
</body>
</html>