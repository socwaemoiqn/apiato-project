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
            <div class="row">
                <h2> Detail</h2>
                <div class="col-md-4">
                <h2>Hình Ảnh</h2>
                  <div class="col-md-3 col-lg-3 " align="center"> 
                <img alt="User Pic" src="https://thuthuatnhanh.com/wp-content/uploads/2019/05/gai-xinh-toc-ngan-facebook.jpg" class="img-circle img-responsive"> </div>
                    
                </div>
                <div class="col-md-8">
                <h2>{{ $detailgirls->ten }}</h2>
                        <div class=" col-md-9 col-lg-9 ">
                                        <table class="table table-user-information">
                                            <tbody>
                                                
                                                <tr>
                                                    <td>ID :</td>
                                                    <td>{{ $detailgirls->id }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tên:</td>
                                                    <td>{{ $detailgirls->ten }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Vong 1:</td>
                                                    <td>{{ $detailgirls->Vong1 }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Vong 2:</td>
                                                    <td>{{ $detailgirls->Vong2 }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Vong 3:</td>
                                                    <td>{{ $detailgirls->Vong3 }}</td>
                                                </tr>
        
                                                <tr>
                                                    <tr>
                                                        <td>Votes :</td>
                                                        <td>{{ $detailgirls->votes}}</td>
                                                    </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{ url('/fans/createfans/'.$detailgirls->id.'') }}">
                                            <button class="btn btn-lg btn-success" type="button">Create Fans</button>
                                          </a>
                                          <a href="{{ url('fans/list/'.$detailgirls->id.'') }}">
                                            <button class="btn btn-lg btn-success" type="button">My Fans</button>
                                          </a>
                </div>
            </div>
        </div>
    </body>
</html>