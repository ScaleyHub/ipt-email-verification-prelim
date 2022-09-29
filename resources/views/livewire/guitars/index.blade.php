<div>
    <table class="table table-striped text-center mt-4 shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="table table-bordered">
            <tr>
                <th>Guitar Name</th>
                <th>Brand</th>
                <th>Material</th>
                <th>Year Model</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guitars as $guitar)
                <tr>
                    <td>{{ $guitar->guitar_name }}</td>
                    <td>{{ $guitar->brand }}</td>
                    <td>{{ $guitar->material }}</td>
                    <td>{{ $guitar->year_model }}</td>
                    <td>
                        <a href="{{ url('edit', ['guitar' => $guitar->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['guitar' => $guitar->id]) }}" class="btn btn-sm btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

