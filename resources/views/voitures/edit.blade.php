<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Nouvelle Voiture</div>

                    <div class="card-body">
                        <form action="{{ route('nouvellevehicules..update', $voitures->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label for="numerochassis">Numero Chassis:</label>
                                <input type="text" name="numerochassis" class="form-control" value="{{ old('numerochassis') }}">
                            </div>

                            <div class="form-group">
                                <label for="matricule">Matricule:</label>
                                <input type="text" name="matricule" class="form-control" value="{{ old('matricule') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="marque">Marque:</label>
                                <input type="text" name="marque" class="form-control" value="{{ old('marque') }}">
                            </div>

                            <div class="form-group">
                                <label for="module">Module:</label>
                                <input type="text" name="module" class="form-control" value="{{ old('module') }}">
                            </div>

                            <div class="form-group">
                                <label for="datamisecirc">Date Mise en Circulation:</label>
                                <input type="date" name="datamisecirc" class="form-control" value="{{ old('datamisecirc') }}">
                            </div>

                            <div class="form-group">
                                <label for="nombredplace">Nombre de Places:</label>
                                <input type="text" name="nombredplace" class="form-control" value="{{ old('nombredplace') }}">
                            </div>
                            <div class="form-group">
                                <label for="kilometrage">Kilometrage:</label>
                                <input type="text" name="kilometrage" class="form-control" value="{{ old('kilometrage') }}">
                            </div>

                            <div class="form-group">
                                <label for="prixlocation">Prix de Location:</label>
                                <input type="text" name="prixlocation" class="form-control" value="{{ old('prixlocation') }}">
                            </div>

                            <div class="form-group">
                                <label for="colorvehicule">Couleur du Véhicule:</label>
                                <input type="text" name="colorvehicule" class="form-control" value="{{ old('colorvehicule') }}">
                            </div>

                            <div class="form-group">
                                <label for="typedecarburant">Type de Carburant:</label>
                                <input type="text" name="typedecarburant" class="form-control" value="{{ old('typedecarburant') }}">
                            </div>

                            <div class="form-group">
                                <label for="carburant">Carburant:</label>
                                <input type="text" name="carburant" class="form-control" value="{{ old('carburant') }}">
                            </div>

                            <div class="form-group">
                                <label for="etatvoiture">État de la Voiture:</label>
                                <input type="text" name="etatvoiture" class="form-control" value="{{ old('etatvoiture') }}">
                            </div>

                            <div class="form-group">
                                <label for="accessoir">Accessoires:</label>
                                <textarea name="accessoir" class="form-control">{{ old('accessoir') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="observation">Observation:</label>
                                <textarea name="observation" class="form-control">{{ old('observation') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="Dateautorisation">Date d'Autorisation:</label>
                                <input type="date" name="Dateautorisation" class="form-control" value="{{ old('Dateautorisation') }}">
                            </div>

                            <div class="form-group">
                                <label for="Dateautorisationv">Date d'Autorisation de Vente:</label>
                                <input type="date" name="Dateautorisationv" class="form-control" value="{{ old('Dateautorisationv') }}">
                            </div>

                            <div class="form-group">
                                <label for="DateCarteGrise">Date de Carte Grise:</label>
                                <input type="date" name="DateCarteGrise" class="form-control" value="{{ old('DateCarteGrise') }}">
                            </div>

                            <div class="form-group">
                                <label for="DateCarteGrisev">Date de Carte Grise de Vente:</label>
                                <input type="date" name="DateCarteGrisev" class="form-control" value="{{ old('DateCarteGrisev') }}">
                            </div>

                            <div class="form-group">
                                <label for="imagevoiture">Image Voiture:</label>
                                <input type="file" name="imagevoiture" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="imageatourisatio">Image Autorisation:</label>
                                <input type="file" name="imageatourisatio" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="imagerectocviste">Image Recto CViste:</label>
                                <input type="file" name="imagerectocviste" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="imageversovisite">Image Verso Visite:</label>
                                <input type="file" name="imageversovisite" class="form-control-file">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Nouvelle Voiture</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>