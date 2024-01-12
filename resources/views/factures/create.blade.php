    <h1>Create Facture</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('factures.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="numerofacture">Numero Facture:</label>
            <input type="text" name="numerofacture" class="form-control" value="{{ old('numerofacture', $numerofacture) }}" readonly required>
        </div>

        <div class="form-group">
            <label for="datefacture">Date Facture:</label>
            <input type="date" name="datefacture" class="form-control" value="{{ old('datefacture') ?: date('Y-m-d')  }}">
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

        <button type="submit" class="btn btn-primary">Create Facture</button>
    </form>

