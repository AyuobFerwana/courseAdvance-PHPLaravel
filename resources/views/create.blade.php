<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="{{ route('res.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Name" name="name"> <br><br>
            <textarea name="content" placeholder="Content"></textarea><br>
            <input type="submit" value="Create" name="but">
        </form>
    </div>

</body>

</html>
