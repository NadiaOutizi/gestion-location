    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Assurance</div>

                    <div class="card-body">
                        <form action="{{ route('assurances.update', $assurance->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label for="assurance">Assurance:</label>
                                <input type="text" name="assurance" class="form-control" value="{{ old('assurance') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="numeropolice">Numero Police:</label>
                                <input type="text" name="numeropolice" class="form-control" value="{{ old('numeropolice') }}">
                            </div>
                            <div class="form-group">
                                <label for="Dateoperation">Date Operation:</label>
                                <input type="date" name="Dateoperation" class="form-control" value="{{ old('Dateoperation') }}">
                            </div>

                            <div class="form-group">
                                <label for="heuredebut">Heure Debut:</label>
                                <input type="text" name="heuredebut" class="form-control" value="{{ old('heuredebut') }}">
                            </div>

                            <div class="form-group">
                                <label for="datedebut">Date Debut:</label>
                                <input type="date" name="datedebut" class="form-control" value="{{ old('datedebut') }}">
                            </div>

                            <div class="form-group">
                                <label for="dureemois">Duree Mois:</label>
                                <input type="number" name="dureemois" class="form-control" value="{{ old('dureemois') }}">
                            </div>

                            <div class="form-group">
                                <label for="datefin">Date Fin:</label>
                                <input type="date" name="datefin" class="form-control" value="{{ old('datefin') }}">
                            </div>

                            <div class="form-group">
                                <label for="prix">Prix:</label>
                                <input type="number" name="prix" class="form-control" value="{{ old('prix') }}">
                            </div>

                            <div class="form-group">
                                <label for="contactass">Contact Assurance:</label>
                                <input type="text" name="contactass" class="form-control" value="{{ old('contactass') }}">
                            </div>

                            <div class="form-group">
                                <label for="observation">Observation:</label>
                                <input type="text" name="observation" class="form-control" value="{{ old('observation') }}">
                            </div>

                            <div class="form-group">
                                <label for="matricule">Matricule:</label>
                                <input type="text" name="matricule" class="form-control" value="{{ old('matricule') }}">
                            </div>

                            <div class="form-group">
                                <label for="modele">Modele:</label>
                                <input type="text" name="modele" class="form-control" value="{{ old('modele') }}">
                            </div>

                            <div class="form-group">
                                <label for="assurancepic">Assurance Picture:</label>
                                <input type="file" name="assurancepic" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="pjpic">PJ Picture:</label>
                                <input type="file" name="pjpic" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="etat">Etat:</label>
                                <input type="text" name="etat" class="form-control" value="{{ old('etat') }}">
                            </div>

                            <div class="form-group">
                                <label for="matricule_id">Matricule:</label>
                                <select name="matricule_id" class="form-control" required>
                                    @foreach ($nouvellevoitures as $nouvellevoiture)
                                        <option value="{{ $nouvellevoiture->id }}">{{ $nouvellevoiture->matricule }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Assurance</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

