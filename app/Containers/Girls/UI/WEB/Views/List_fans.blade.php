<!DOCTYPE html>
<html>
    <head>
        <title>ShowRoom</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
            @foreach($fans as $item)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-title"><h3>{{ $item->ten }}</h3></div>
                    <div class="card-text">
                        Created By: <b>{{ $item->girls->ten }}</b><br />
                        
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </body>
</html>
