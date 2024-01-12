<h1>Edit Imprimefacture</h1>

<form action="{{ route('imprimefactures.update', $imprimefacture->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
            <label for="vehicule">Vehicule:</label>
            <input type="text" name="vehicule" class="form-control" value="{{ old('vehicule') }}" required>
        </div>

        <div class="form-group">
            <label for="matricule">Matricule:</label>
            <input type="text" name="matricule" class="form-control" value="{{ old('matricule') }}" required>
        </div>

        <div class="form-group">
            <label for="jours">Days:</label>
            <input type="text" name="jours" class="form-control" value="{{ old('jours') }}" required>
        </div>

        <div class="form-group">
            <label for="duu">Start Date:</label>
            <input type="text" name="duu" class="form-control" value="{{ old('duu') }}" required>
        </div>

        <div class="form-group">
            <label for="au">End Date:</label>
            <input type="text" name="au" class="form-control" value="{{ old('au') }}" required>
        </div>

        <div class="form-group">
            <label for="prix">Price:</label>
            <input type="text" name="prix" class="form-control" value="{{ old('prix') }}" required>
        </div>

        <div class="form-group">
            <label for="total">Total:</label>
            <input type="text" name="total" class="form-control" value="{{ old('total') }}" required>
        </div>

    <button type="submit" class="btn btn-primary">Update Imprimefacture</button>
</form>