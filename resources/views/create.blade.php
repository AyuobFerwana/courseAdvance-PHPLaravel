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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('res.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Name" name="name"><br>
<hr>
            <textarea name="content" placeholder="Content"></textarea>

            <input type="submit" value="Create" name="but">
        </form>
    </div>

</body>

</html>
