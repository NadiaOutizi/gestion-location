    <div class="container">
        <h2>Edit Traite</h2>
        <form method="POST" action="{{ route('traites.update', $traite->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" name="matricule" class="form-control" value="{{ old('matricule', $traite->matricule) }}">
            </div>

            <div class="form-group">
                <label for="datetrait">Date Trait:</label>
                <input type="date" name="datetrait" class="form-control" value="{{ old('datetrait', $traite->datetrait) }}">
            </div>

            <div class="form-group">
                <label for="observation">Observation:</label>
                <input type="text" name="observation" class="form-control" value="{{ old('observation', $traite->observation) }}">
            </div>

            <div class="form-group">
                <label for="montant">Montant:</label>
                <input type="text" name="montant" class="form-control" value="{{ old('montant', $traite->montant) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Traite</button>
        </form>
    </div>
