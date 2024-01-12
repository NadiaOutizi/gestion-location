    <div class="container">
        <h2>Traites</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Matricule</th>
                    <th>Date Trait</th>
                    <th>Observation</th>
                    <th>Montant</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($traites as $traite)
                    <tr>
                        <td>{{ $traite->id }}</td>
                        <td>{{ $traite->matricule }}</td>
                        <td>{{ $traite->datetrait }}</td>
                        <td>{{ $traite->observation }}</td>
                        <td>{{ $traite->montant }}</td>
                        <td>
                            <a href="{{ route('traites.edit', $traite->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('traites.destroy', $traite->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

