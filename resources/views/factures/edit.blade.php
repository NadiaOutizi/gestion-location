<h1>Edit Facture</h1>

<form action="{{ route('factures.update', $facture->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
            <label for="numerofacture">Numero Facture:</label>
            <input type="text" name="numerofacture" class="form-control" value="{{ old('numerofacture') }}" required>
        </div>

        <div class="form-group">
            <label for="datefacture">Date Facture:</label>
            <input type="date" name="datefacture" class="form-control" value="{{ old('datefacture') }}">
        </div>

        <div class="form-group">
            <label for="client">Client:</label>
            <input type="text" name="client" class="form-control" value="{{ old('client') }}" maxlength="50">
        </div>

        <div class="form-group">
            <label for="lieufact">Lieu Facturation:</label>
            <input type="text" name="lieufact" class="form-control" value="{{ old('lieufact') }}" maxlength="50">
        </div>

        <div class="form-group">
            <label for="doit">Doit:</label>
            <input type="text" name="doit" class="form-control" value="{{ old('doit') }}" maxlength="50">
        </div>

        <div class="form-group">
            <label for="ice">ICE:</label>
            <input type="text" name="ice" class="form-control" value="{{ old('ice') }}" maxlength="50">
        </div>

        <div class="form-group">
            <label for="nombrecontrat">Nombre Contrat:</label>
            <input type="text" name="nombrecontrat" class="form-control" value="{{ old('nombrecontrat') }}" maxlength="50">
        </div>

        <div class="form-group">
            <label for="montantht">Montant HT:</label>
            <input type="text" name="montantht" class="form-control" value="{{ old('montantht') }}" maxlength="50">
        </div>

        <div class="form-group">
            <label for="tva">TVA:</label>
            <input type="text" name="tva" class="form-control" value="{{ old('tva') }}" maxlength="50">
        </div>

        <div class="form-group">
            <label for="montantttc">Montant TTC:</label>
            <input type="text" name="montantttc" class="form-control" value="{{ old('montantttc') }}" maxlength="50">
        </div>

<button type="submit" class="btn btn-primary">Update Facture</button>
</form>