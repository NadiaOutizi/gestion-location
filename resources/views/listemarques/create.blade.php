    <div class="container">
        <h2>Create ListeMarque</h2>
        <form action="{{ route('listemarques.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="marquenom">Marque Nom:</label>
                <input type="text" name="marquenom" class="form-control" value="{{ old('marquenom') }}" required>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>

