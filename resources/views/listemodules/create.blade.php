
<h1>Create New ListeModule</h1>
    <form action="{{ route('listemodules.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="modulenom">Module Name:</label>
            <input type="text" name="modulenom" class="form-control" value="{{ old('modulenom') }}" required>
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" name="category" class="form-control" value="{{ old('category') }}">
        </div>

        <div class="form-group">
            <label for="marque_id">Marque:</label>
            <select name="marque_id" class="form-control">
                @foreach ($listemarques as $listemarque)
                    <option value="{{ $listemarque->id }}">{{ $listemarque->marquenom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

