<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <h1>login</h1>
    <form action="{{ route('auth.login') }}" method="post">
        @csrf
        email <input type="text" name="email">
        password <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>
</body>

</html>