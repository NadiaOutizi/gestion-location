<div class="container">
        <h2>Edit Reservation</h2>
        <form method="POST" action="{{ route('reservations.update', $reservation->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="form-group">
                <label for="numreservation">Reservation Number:</label>
                <input type="text" name="numreservation" class="form-control" value="{{ old('numreservation') }}" required>
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
                <label for="client">Client:</label>
                <input type="text" name="client" class="form-control" value="{{ old('client') }}" maxlength="50">
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
                <label for="datereservation">Reservation Date:</label>
                <input type="date" name="datereservation" class="form-control" value="{{ old('datereservation') }}">
            </div>

            <div class="form-group">
                <label for="datedebut">Start Date:</label>
                <input type="date" name="datedebut" class="form-control" value="{{ old('datedebut') }}">
            </div>
            <div class="form-group">
                <label for="datefin">End Date:</label>
                <input type="date" name="datefin" class="form-control" value="{{ old('datefin') }}">
            </div>

            <div class="form-group">
                <label for="adresse">Address:</label>
                <input type="text" name="adresse" class="form-control" value="{{ old('adresse') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="passport">Passport:</label>
                <input type="text" name="passport" class="form-control" value="{{ old('passport') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="valpass">Passport Validation:</label>
                <input type="text" name="valpass" class="form-control" value="{{ old('valpass') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="matricuule">Matricule:</label>
                <input type="text" name="matricuule" class="form-control" value="{{ old('matricuule') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="voiture">Vehicle:</label>
                <input type="text" name="voiture" class="form-control" value="{{ old('voiture') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="prixjourne">Price per Day:</label>
                <input type="text" name="prixjourne" class="form-control" value="{{ old('prixjourne') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="total">Total:</label>
                <input type="text" name="total" class="form-control" value="{{ old('total') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="avance">Advance:</label>
                <input type="text" name="avance" class="form-control" value="{{ old('avance') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="note">Note:</label>
                <textarea name="note" class="form-control" rows="3">{{ old('note') }}</textarea>
            </div>
            <div class="form-group">
                <label for="jours">Jours:</label>
                <input type="text" name="jours" class="form-control" value="{{ old('jours') }}" maxlength="50">
            </div>


            <div class="form-group">
                <label for="dpasspor">Passport Image:</label>
                <input type="file" name="dpasspor" class="form-control-file" accept="image/*">
            </div>
            <div class="form-group">
                <label for="DCIN">CIN Image:</label>
                <input type="file" name="DCIN" class="form-control-file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="dpermi">Driver's License Image:</label>
                <input type="file" name="dpermi" class="form-control-file" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Update Reservation</button>
        </form>
    </div>