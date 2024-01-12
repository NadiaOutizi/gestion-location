    <h1>Imprimefactures</h1>
    <a href="{{ route('imprimefactures.create') }}" class="btn btn-primary">Create Imprimefacture</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vehicule</th>
                <th>Matricule</th>
                <th>Days</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Price</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($imprimefactures as $imprimefacture)
                <tr>
                    <td>{{ $imprimefacture->id }}</td>
                    <td>{{ $imprimefacture->vehicule }}</td>
                    <td>{{ $imprimefacture->matricule }}</td>
                    <td>{{ $imprimefacture->jours }}</td>
                    <td>{{ $imprimefacture->duu }}</td>
                    <td>{{ $imprimefacture->au }}</td>
                    <td>{{ $imprimefacture->prix }}</td>
                    <td>{{ $imprimefacture->total }}</td>
                    <td>
                        <a href="{{ route('imprimefactures.destroy', $imprimefacture->id) }}" class="btn btn-info">Delete</a>
                        <a href="{{ route('imprimefactures.edit', $imprimefacture->id) }}" class="btn btn-warning">Edit</a>
                        >
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

