<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ url('/car/search') }}">
                <h2>Tìm kiếm trong dữ liệu</h2>
                <div class="form-group">
                    <input type="text" name="search" placeholder="Search...!" class="form-control"/>
                    <input type="submit" class="btn btn-primary" value="Search"/>
                </div>
            </form>
        </div>
        <div class="col-md-10">
            <table class="table">
                @foreach($data as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->mota}}</td>     
                </tr>
                @endforeach
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
