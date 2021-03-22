<!DOCTYPE html>
<html>
    <head>
        <title>ShowRoom</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                
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
.
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
                font-size: 96px;
            }
            
        </style>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title m-b-md">ShowRoom Girls</div>
                <div class="container">
                  <form action="{{ url('girls/search') }}" method="GET">
                  <input type="text" name="key" placeholder="Input keysearch...!" class="form-control"/>
               
                  <div class="col-auto">
                    <button class="btn btn-lg btn-success" type="submit">Search</button>
                </div>
               </form>
                 
                  <br></br>
                    <div class="row">
                      @if(session('status'))
                      <div class="text-red text-center">{{ session('status') }}</div>
                      @endif
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name</th>
                                    <th>Vong1</th>
                                    <th>Vong2</th>
                                    <th>Vong3</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allgirl as $row)
                                <tr id="d1">
                                    <td id="t">{{$row->id}}</td>
                                    <td id="l1"><a href="/girls/detail/{{$row->id}}">{{$row->ten}}</td>
                                    <td id="m1">{{$row->Vong1}}</td>
                                    <td id="m2">{{$row->Vong2}}</td>
                                    <td id="m2">{{$row->Vong3}}</td>
                                    <td><a href="/girls/{{$row->id}}/edit"><button type="button"   class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
                                    <form method="POST" action="/girls/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">

                                      @csrf
                                    <td><button type="submit"  class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
                                  </form>
                                </tr>
                                
                                
                                @endforeach
                            </tbody>
                        </table>
                        {!! $allgirl->render() !!}


                    </div>
                </div>
                <tr>
                  <a href="{{ url('girls/create') }}">
                    <button class="btn btn-lg btn-success" type="button">Create</button>
                  </a>
                </tr>
                <br></br>
                <tr>
                  <a href="{{ url('/logout' )}}">
                    <button class="btn btn-lg btn-success" type="button">Logout</button>
                </a>
              </tr>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <br></br>
        
    </body>
</html>