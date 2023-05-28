<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
            <th>Content</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Deleted</th>
            <th>Action</th>
            <th></th>
            <th>Show</th>
            <th></th>
            <th>Soft Delete</th>
            <th></th>
            <th>Force Delete</th>




        </tr>
    </thead>

    <tbody>
        <a href="{{ route('res.create') }}">Create</a>
        @foreach ($test as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td></td>

            <td>{{ $data->content }}</td>
            <td></td>
            <td>{{ $data->created_at }}</td>
            <td>{{ $data->updated_at}}</td>
            <td>{{ $data->deleted_at }}</td>


            <td> <a href="res/{{ $data->id }}/edit">Edit</a></td>
            <td></td>
            <td> <a href="res/{{ $data->id }}">Show</a></td>

            <td>
                <form action="{{ route('res.destroy', ['re'=>$data->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>

            </td>
<td></td>
<td></td>

            <td>
                <form action="{{ route('res.force', $data->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>

            </td>

        </tr>
        @endforeach
    </tbody>
</table>
