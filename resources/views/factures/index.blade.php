    <h1>List Factures</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('factures.create') }}" class="btn btn-primary">Create Facture</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Numero Facture</th>
                <th>Date Facture</th>
                <th>Client</th>
                <th>Lieu Facturation</th>
                <th>Doit</th>
                <th>ICE</th>
                <th>Nombre Contrat</th>
                <th>Montant HT</th>
                <th>TVA</th>
                <th>Montant TTC</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($factures as $facture)
                <tr>
                    <td>{{ $facture->id }}</td>
                    <td>{{ $facture->numerofacture }}</td>
                    <td>{{ $facture->datefacture }}</td>
                    <td>{{ $facture->client }}</td>
                    <td>{{ $facture->lieufact }}</td>
                    <td>{{ $facture->doit }}</td>
                    <td>{{ $facture->ice }}</td>
                    <td>{{ $facture->nombrecontrat }}</td>
                    <td>{{ $facture->montantht }}</td>
                    <td>{{ $facture->tva }}</td>
                    <td>{{ $facture->montantttc }}</td>
                    <td>
                        <a href="{{ route('factures.edit', $facture->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('factures.destroy', $facture->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

