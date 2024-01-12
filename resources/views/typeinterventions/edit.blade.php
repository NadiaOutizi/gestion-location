    <div class="container">
        <h2>Edit Type Intervention</h2>

        <form action="{{ route('typeinterventions.update', $typeintervention->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" name="type" class="form-control" value="{{ old('type', $typeintervention->type) }}" required>
            </div>

            <div class="form-group">
                <label for="altkm">Altitude (km):</label>
                <input type="text" name="altkm" class="form-control" value="{{ old('altkm', $typeintervention->altkm) }}" required>
            </div>

            <div class="form-group">
                <label for="artdate">Art Date:</label>
                <input type="text" name="artdate" class="form-control" value="{{ old('artdate', $typeintervention->artdate) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('typeinterventions.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

