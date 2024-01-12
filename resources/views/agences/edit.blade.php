<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Agence</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('agences.update', $agence->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Agence">Agence:</label>
                                <input type="text" name="Agence" class="form-control" value="{{ old('Agence') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="Adresse">Adresse:</label>
                                <textarea name="Adresse" class="form-control" rows="3" required>{{ old('Adresse') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="Ville">Ville:</label>
                                <input type="text" name="Ville" class="form-control" value="{{ old('Ville') }}">
                            </div>
                            <div class="form-group">
                                <label for="CodeP">Code Postal:</label>
                                <input type="text" name="CodeP" class="form-control" value="{{ old('CodeP') }}">
                            </div>

                            <div class="form-group">
                                <label for="GSM">GSM:</label>
                                <input type="text" name="GSM" class="form-control" value="{{ old('GSM') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="gms">GMS:</label>
                                <input type="text" name="gms" class="form-control" value="{{ old('gms') }}">
                            </div>

                            <div class="form-group">
                                <label for="telefix">Telephone Fixe:</label>
                                <input type="text" name="telefix" class="form-control" value="{{ old('telefix') }}">
                            </div>

                            <div class="form-group">
                                <label for="fax">Fax:</label>
                                <input type="text" name="fax" class="form-control" value="{{ old('fax') }}">
                            </div>

                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" name="Email" class="form-control" value="{{ old('Email') }}">
                            </div>

                            <div class="form-group">
                                <label for="Nomfran">Nom France:</label>
                                <input type="text" name="Nomfran" class="form-control" value="{{ old('Nomfran') }}">
                            </div>

                            <div class="form-group">
                                <label for="prenomFrance">Prenom France:</label>
                                <input type="text" name="prenomFrance" class="form-control" value="{{ old('prenomFrance') }}">
                            </div>

                            <div class="form-group">
                                <label for="cine">CINE:</label>
                                <input type="text" name="cine" class="form-control" value="{{ old('cine') }}">
                            </div>

                            <div class="form-group">
                                <label for="telephone">Telephone:</label>
                                <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}">
                            </div>
                            <div class="form-group">
                                <label for="patent">Patent:</label>
                                <input type="text" name="patent" class="form-control" value="{{ old('patent') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="rc">RC:</label>
                                <input type="text" name="rc" class="form-control" value="{{ old('rc') }}">
                            </div>

                            <div class="form-group">
                                <label for="iff">IFF:</label>
                                <input type="text" name="iff" class="form-control" value="{{ old('iff') }}">
                            </div>

                            <div class="form-group">
                                <label for="ice">ICE:</label>
                                <input type="text" name="ice" class="form-control" value="{{ old('ice') }}">
                            </div>

                            <div class="form-group">
                                <label for="cnss">CNSS:</label>
                                <input type="text" name="cnss" class="form-control" value="{{ old('cnss') }}">
                            </div>

                            <div class="form-group">
                                <label for="Bancaire">Information Bancaire:</label>
                                <input type="text" name="Bancaire" class="form-control" value="{{ old('Bancaire') }}">
                            </div>

                            <div class="form-group">
                                <label for="logo">Logo:</label>
                                <input type="file" name="logo" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="condition">Condition:</label>
                                <input type="file" name="condition" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Agence</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>