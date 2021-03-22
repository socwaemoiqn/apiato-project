<!doctype html>
<html lang="{{ app()->getLocale() }}">
<title>Apiato bienle</title>
<table border="1">
                @if(session('status'))
                <div class="text-red">{{ session('status') }}</div>
                @endif
    <thead>
    <form action="{{ url('/car/search') }}" method="get">
                <h2>Tìm kiếm trong dữ liệu</h2>
                <div class="form-group">
                    <input type="text" name="q" placeholder="Search...!" class="form-control"/>
                    <input type="submit" class="btn btn-primary" value="Search"/>
                </div>
    </form>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mô Tả</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td><a href="/car/view_car/{{$row->id}}">{{$row->name}}</a></td>
            <td>{{$row->mota}}</td>
            <td><a href="/car/update/{{$row->id}}">Edit</a> |<a href="/car">Add</a>
            <form method="POST" action="/car/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</html>