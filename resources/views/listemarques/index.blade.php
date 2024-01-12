    <div class="container">
        <h2>ListeMarques</h2>
        <a href="{{ route('listemarques.create') }}" class="btn btn-primary mb-2">Create New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marque Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listemarques as $listemarque)
                    <tr>
                        <td>{{ $listemarque->id }}</td>
                        <td>{{ $listemarque->marquenom }}</td>
                        <td>
                            <a href="{{ route('listemarques.destroy', $listemarque->id) }}" class="btn btn-info btn-sm">Delete</a>
                            <a href="{{ route('listemarques.edit', $listemarque->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

