@convUnix(time()) <br>
<hr>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
            <th>Content</th>
            <th>Status</th>
            <th>show</th>
            <th>Deleted</th>

            <th>Created</th>
            <th>Updated</th>
            {{-- <th>the_time_ofDeleted</th> --}}

            <th>forceDeleted</th>

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
        <a href="res/create">Create</a> &nbsp; &nbsp;&nbsp;
        <a href="res">withOut Trashed</a>&nbsp;&nbsp;&nbsp;
        <a href="res?trashed=yes">Trashed</a>

        @foreach ($test as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td></td>

            <td>{{ $data->content }}</td>
            <td>{{ $data->status }}</td>
            <td>{{ $data->show ==1? 'show': 'hide' }}</td>

            <td></td>
            <td>{{ $data->created_at }}</td>
            <td>{{ $data->updated_at}}</td>
            {{-- <td>{{ $data->the_time_ofDeleted }}</td> --}}
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
                    <input type="submit" value="Force Delete">
                </form>

            </td>


            <td>
                <form action="{{ route('res.restore', $data->id) }}" method="POST">
                    @csrf
                    <input type="submit" value="Restore">
                </form>

            </td>

        </tr>
        @endforeach
    </tbody>
</table>
