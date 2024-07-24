<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div>{{ $e }}</div>
        @endforeach
    @endif

    <form action="" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="name" placeholder="Name">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="password" name="password_confirmation" id="" placeholder="Password">
        <input type="submit" value="Send">
    </form>
</body>
</html>