<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        @if ($errors->any())
        <div>
            <strong>Validation errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h2>Create a New Contrat</h2>
        <form action="{{ route('contrats.store') }}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="numcontrat">Contract Number:</label>
                <input type="text" name="numcontrat" class="form-control" value="{{ isset($contrat) ? sprintf('%05d', $contrat->numcontrat) : sprintf('%05d', $nextContractNumber) }}" readonly>
            </div>

            <div class="form-group">
                <label for="datecontrat">Contract Date:</label>
                <input type="date" name="datecontrat" class="form-control" value="{{ old('datecontrat') ?: date('Y-m-d') }}">
            </div>
            <div class="form-group">
                <label for="client">Client:</label>
                <input type="text" name="client" class="form-control" value="{{ old('client') }}" maxlength="100">
            </div>

            <div class="form-group">
                <label for="cin">CIN:</label>
                <input type="text" name="cin" class="form-control" value="{{ old('cin') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="valcin">CIN Validation:</label>
                <input type="text" name="valcin" class="form-control" value="{{ old('valcin') }}" maxlength="50">
            </div>
            <div class="form-group">
                <label for="permi">Driver's License:</label>
                <input type="text" name="permi" class="form-control" value="{{ old('permi') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="valpermi">Driver's License Validation:</label>
                <input type="text" name="valpermi" class="form-control" value="{{ old('valpermi') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="du">Start Date:</label>
                <input type="date" name="du" class="form-control" value="{{ old('du') }}">
            </div>

            <div class="form-group">
                <label for="au">End Date:</label>
                <input type="date" name="au" class="form-control" value="{{ old('au') }}">
            </div>

            <div class="form-group">
                <label for="jours">Number of Days:</label>
                <input type="text" name="jours" class="form-control" value="{{ old('jours') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="lieulivr">Delivery Location:</label>
                <input type="text" name="lieulivr" class="form-control" value="{{ old('lieulivr') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="lieurecu">Return Location:</label>
                <input type="text" name="lieurecu" class="form-control" value="{{ old('lieurecu') }}" maxlength="50">
            </div>
            <div class="form-group">
                <label for="lieucontrat">Lieu Contrat:</label>
                <input type="text" name="lieucontrat" class="form-control" value="{{ $agence->Ville }}" maxlength="50">
            </div>
            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" name="matricule" class="form-control" value="{{ old('matricule') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="vehicule">Vehicle:</label>
                <input type="text" name="vehicule" class="form-control" value="{{ old('vehicule') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="prix">Price:</label>
                <input type="text" name="prix" class="form-control" value="{{ old('prix') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="kmdepart">Initial Kilometers:</label>
                <input type="text" name="kmdepart" class="form-control" value="{{ old('kmdepart') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="carbu">Fuel:</label>
                <input type="text" name="carbu" class="form-control" value="{{ old('carbu') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="typecarbu">Fuel Type:</label>
                <input type="text" name="typecarbu" class="form-control" value="{{ old('typecarbu') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="typepayment">Payment Type:</label>
                <input type="text" name="typepayment" class="form-control" value="{{ old('typepayment') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="garentie">Guarantee:</label>
                <input type="text" name="garentie" class="form-control" value="{{ old('garentie') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="montant">Amount:</label>
                <input type="text" name="montant" class="form-control" value="{{ old('montant') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="etat">Status:</label>
                <input type="text" name="etat" class="form-control" value="{{ old('etat') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="cliente">Client Email:</label>
                <input type="text" name="cliente" class="form-control" value="{{ old('cliente') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="cinvale">Client Validation:</label>
                <input type="text" name="cinvale" class="form-control" value="{{ old('cinvale') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="permiee">Driver's Email:</label>
                <input type="text" name="permiee" class="form-control" value="{{ old('permiee') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="permieeval">Driver's Validation:</label>
                <input type="text" name="permieeval" class="form-control" value="{{ old('permieeval') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="cincondu">Driver's CIN:</label>
                <input type="text" name="cincondu" class="form-control" value="{{ old('cincondu') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="equipement">Equipment:</label>
                <input type="text" name="equipement" class="form-control" value="{{ old('equipement') }}" maxlength="50">
            </div>
            <!-- Continue adding form fields for other fields -->

            <div class="form-group">
                <label for="DCIN">Client ID Document (Image):</label>
                <input type="file" name="DCIN" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="dpermi">Driver's License (Image):</label>
                <input type="file" name="dpermi" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="dpasspor">Passport (Image):</label>
                <input type="file" name="dpasspor" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="DCINe">Client Email ID Document (Image):</label>
                <input type="file" name="DCINe" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="dpermie">Driver's Email Driver's License (Image):</label>
                <input type="file" name="dpermie" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="dpasspore">Driver's Email Passport (Image):</label>
                <input type="file" name="dpasspore" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="adressee">Driver's Email Address:</label>
                <input type="text" name="adressee" class="form-control" value="{{ old('adressee') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="telephonee">Driver's Email Telephone:</label>
                <input type="text" name="telephonee" class="form-control" value="{{ old('telephonee') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="passporte">Driver's Email Passport:</label>
                <input type="text" name="passporte" class="form-control" value="{{ old('passporte') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="valpasse">Driver's Email Passport Validation:</label>
                <input type="text" name="valpasse" class="form-control" value="{{ old('valpasse') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="heure">Time (Hour):</label>
                <input type="text" name="heure" class="form-control" value="{{ old('heure') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="min">Time (Minute):</label>
                <input type="text" name="min" class="form-control" value="{{ old('min') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="sousloa">Under Lease Agreement:</label>
                <input type="text" name="sousloa" class="form-control" value="{{ old('sousloa') }}" maxlength="100">
            </div>

            <div class="form-group">
                <label for="matriculesous">Under Lease Agreement Matricule:</label>
                <input type="text" name="matriculesous" class="form-control" value="{{ old('matriculesous') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="Souslocaetat">Under Lease Agreement Status:</label>
                <input type="text" name="Souslocaetat" class="form-control" value="{{ old('Souslocaetat') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="datehm">Date and Time:</label>
                <input type="text" name="datehm" class="form-control" value="{{ old('datehm') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="av">Advance:</label>
                <input type="text" name="av" class="form-control" value="{{ old('av') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="client_id">Select Client:</label>
                <select name="client_id" class="form-control">
                    @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="matricule_id">Select New Car:</label>
                <select name="matricule_id" class="form-control">
                    @foreach($voitures as $voiture)
                    <option value="{{ $voiture->id }}">{{ $voiture->matricule }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Contrat</button>
        </form>
    </div>
</body>

</html>