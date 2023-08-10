<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>login page </h1>

    <div>
        <form action="/login" method="POST">
        @csrf

        <input type="text" name="username" placeholder="Enter Your username"><br><br>
        <input type="password" name="password" placeholder="Enter Your password"><br><br>
        <button>login</button>

        </form>
    </div>
</body>
</html>