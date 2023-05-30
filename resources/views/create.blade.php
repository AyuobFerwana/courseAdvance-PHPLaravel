<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{ $ayuob }}
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
            <label for="status">Status</label>
            <select name="status">
                <option value="enable">Enable</option>
                <option value="disable">Disable</option>
            </select>

            <hr>
            <label for="show">show data</label>
            <input type="radio" name="show" value="1" id="show">
            <hr>

            <label for="show">Hide data</label>
            <input type="radio" name="show" value="0" id="hide">
            <hr>
            <input type="text" placeholder="Name" name="name"><br>
            <hr>
            <textarea name="content" placeholder="Content"></textarea>

            <input type="submit" value="Create" name="but">
        </form>
    </div>

</body>

</html>
