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
                                    <td id="l1"><a href="girl/detail/{{$row->id}}">{{$row->ten}}</td>
                                    <td id="m1">{{$row->Vong1}}</td>
                                    <td id="m2">{{$row->Vong2}}</td>
                                    <td id="m2">{{$row->Vong3}}</td>
                                    <td><a href="girls/{{$row->id}}/edit"><button type="button"   class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
                                    <form method="POST" action="girls/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                                      
                                      @csrf
                                    <td><button type="submit"  class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
                                  </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div id="edit" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Update Data</h4>
                      </div>
                      <div class="modal-body">
                           <input id="fn" type="text" class="form-control" name="fname" placeholder="First Name">
                           <input id="ln" type="text" class="form-control" name="fname" placeholder="Last Name">
                           <input id="mn" type="text" class="form-control" name="fname" placeholder="Middle Name">
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="up" class="btn btn-warning" data-dismiss="modal">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> --}}

                {{-- <div id="delete" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Delete Data</h4>
                      </div>
                      <div class="modal-body">
                        <strong>Are you sure you want to delete this data?</strong>
                      </div>
                      <div class="modal-footer">
                        
                          <button type="submit" id="del" class="btn btn-danger" data-dismiss="modal">Delete</button>
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> --}}
                
                <tr>
                <a href="{{ url('girls/create') }}">CreateGirls</a>
                </tr>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <br></br>
        <a href="{{ url('/logout' )}}">
            <button type="button">Logout</button>
        </a>
    </body>
</html>