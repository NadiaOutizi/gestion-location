    <div class="container">
        <h2>Edit Type Intervention</h2>

        <form action="{{ route('typeinterventions.update', $typeintervention->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="centre">Centre:</label>
                <input type="text" name="centre" class="form-control" value="{{ old('centre') }}" required>
            </div>

            <div class="form-group">
                <label for="identicontrol">Identification Control:</label>
                <input type="text" name="identicontrol" class="form-control" value="{{ old('identicontrol') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="nauturisation">Nauturisation:</label>
                <input type="text" name="nauturisation" class="form-control" value="{{ old('nauturisation') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="datevisite">Date Visite:</label>
                <input type="date" name="datevisite" class="form-control" value="{{ old('datevisite') }}" required>
            </div>

            <div class="form-group">
                <label for="duree">Duree:</label>
                <input type="number" name="duree" class="form-control" value="{{ old('duree') }}" required>
            </div>

            <div class="form-group">
                <label for="datefin">Date Fin:</label>
                <input type="date" name="datefin" class="form-control" value="{{ old('datefin') }}" required>
            </div>

            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="text" name="prix" class="form-control" value="{{ old('prix') }}" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" name="contact" class="form-control" value="{{ old('contact') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="observation">Observation:</label>
                <input type="text" name="observation" class="form-control" value="{{ old('observation') }}" maxlength="100">
            </div>

            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" name="matricule" class="form-control" value="{{ old('matricule') }}" maxlength="50" required>
            </div>

            <div class="form-group">
                <label for="module">Module:</label>
                <input type="text" name="module" class="form-control" value="{{ old('module') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="pj">Document (PJ):</label>
                <input type="file" name="pj" class="form-control-file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="visitetechniquepic">Visite Technique Image:</label>
                <input type="file" name="visitetechniquepic" class="form-control-file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="etat">Etat:</label>
                <input type="text" name="etat" class="form-control" value="{{ old('etat') }}" maxlength="50">
            </div>
         
            <div class="form-group">
                <label for="matricule_id">Matricule:</label>
                <select name="matricule_id" class="form-control">
                    <option value="" disabled selected>Select Matricule</option>
                    @foreach($matricules as $matricule)
                        <option value="{{ $matricule->id }}" {{ old('matricule_id') == $matricule->id ? 'selected' : '' }}>
                            {{ $matricule->matricule }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('typeinterventions.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>