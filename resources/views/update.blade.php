<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <form action="{{ route('res.update', ['re'=>$test->id]) }}" method="POST">
        @csrf
        @method('put')
        <input type="text" placeholder="Name" name="name" value="{{ $test->name }}"> <br>
        <hr/>
        <textarea name="content" cols="21" rows="2">{{ $test->content }}</textarea><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
