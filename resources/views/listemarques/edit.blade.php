    <div class="container">
        <h2>Edit ListeMarque</h2>
        <form action="{{ route('listemarques.update', $listemarque->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="marquenom">Marque Nom:</label>
                <input type="text" name="marquenom" class="form-control" value="{{ old('marquenom', $listemarque->marquenom) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

