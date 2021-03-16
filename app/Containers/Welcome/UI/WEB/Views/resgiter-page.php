<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>

<body>
    <form method="post" action="{{ url('/login') }}">
        <h5>Trang đăng ký</h5>
        <p>Username</p>
        <input type="text" name="email" id="" />
        <p>Password</p>
        <input type="password" name="password" id="">
        <input type="submit" value="Register">

    </form>
</body>

</html>