    <div class="container">
        <h2>Edit Revenue</h2>
        <form action="{{ route('revenus.update', $revenu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Motif">Motif:</label>
                <input type="text" name="Motif" class="form-control" value="{{ old('Motif', $revenu->Motif) }}" required>
            </div>

            <div class="form-group">
                <label for="datecharge">Date Charge:</label>
                <input type="date" name="datecharge" class="form-control" value="{{ old('datecharge', $revenu->datecharge) }}">
            </div>

            <div class="form-group">
                <label for="montant">Montant:</label>
                <input type="text" name="montant" class="form-control" value="{{ old('montant', $revenu->montant) }}">
            </div>

            <div class="form-group">
                <label for="observation">Observation:</label>
                <textarea name="observation" class="form-control" rows="3">{{ old('observation', $revenu->observation) }}</textarea>
            </div>

            <div class="form-group">
                <label for="pj">PJ (Attach a file):</label>
                <input type="file" name="pj" class="form-control-file" accept="application/pdf,image/*">
            </div>

            <button type="submit" class="btn btn-primary">Update Revenue</button>
        </form>
    </div>

