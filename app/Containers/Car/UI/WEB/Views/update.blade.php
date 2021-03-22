<!doctype html>
<html lang="{{ app()->getLocale() }}">
<title>Apiato bienle</title>

<form method="post" action="/car/update/{{ $news->id }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="id" value="{{ $news->id }}">
    <p>
        <label for="name">Name</label><br>
        <input type="text" name="name" value="{{ $news->name }}">
    </p>


    <p>
        <label for="mota">Mô Tả</label><br>
        <textarea cols="50" rows="5" name="mota">{{ $news->mota }}</textarea>
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</html>