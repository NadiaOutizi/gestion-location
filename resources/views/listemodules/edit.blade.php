    <h1>Edit ListeModule</h1>
    <form action="{{ route('listemodules.update', $listemodule->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="modulenom">Module Name:</label>
            <input type="text" name="modulenom" class="form-control" value="{{ old('modulenom', $listemodule->modulenom) }}" required>
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $listemodule->category) }}">
        </div>

        <div class="form-group">
            <label for="marque_id">Marque:</label>
            <select name="marque_id" class="form-control">
                @foreach ($listemarques as $listemarque)
                    <option value="{{ $listemarque->id }}" {{ $listemodule->marque_id == $listemarque->id ? 'selected' : '' }}>{{ $listemarque->marquenom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

