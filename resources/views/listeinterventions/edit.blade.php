<div class="container">
        <h2>Edit ListeIntervention</h2>
        <form action="{{ route('listeinterventions.update', $listeIntervention->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
<div class="form-group">
                <label for="typeinter">Type Intervention:</label>
                <input type="text" name="typeinter" class="form-control" value="{{ old('typeinter') }}" required>
            </div>

            <div class="form-group">
                <label for="dateinterve">Date Intervention:</label>
                <input type="date" name="dateinterve" class="form-control" value="{{ old('dateinterve') }}">
            </div>

            <div class="form-group">
                <label for="maticule">Matricule:</label>
                <input type="text" name="maticule" class="form-control" value="{{ old('maticule') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="vehicule">Vehicule:</label>
                <input type="text" name="vehicule" class="form-control" value="{{ old('vehicule') }}" maxlength="10">
            </div>

            <div class="form-group">
                <label for="cout">Cout:</label>
                <input type="text" name="cout" class="form-control" value="{{ old('cout') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="kilomactule">Kilom Actule:</label>
                <input type="text" name="kilomactule" class="form-control" value="{{ old('kilomactule') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="prochenkilo">Proch. Kilo:</label>
                <input type="text" name="prochenkilo" class="form-control" value="{{ old('prochenkilo') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="pj">PJ:</label>
                <input type="file" name="pj" class="form-control-file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="observatio">Observation:</label>
                <textarea name="observatio" class="form-control" rows="3">{{ old('observatio') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
</div>