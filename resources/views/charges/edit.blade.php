    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Charge - {{ $charge->id }}</div>

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

                        <form method="post" action="{{ route('charges.update', $charge->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="Motif">Motif:</label>
                                <textarea name="Motif" class="form-control" rows="3" required>{{ old('Motif', $charge->Motif) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="datechargee">Date Chargée:</label>
                                <input type="date" name="datechargee" class="form-control" value="{{ old('datechargee', $charge->datechargee) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="montant">Montant:</label>
                                <input type="number" name="montant" class="form-control" value="{{ old('montant', $charge->montant) }}">
                            </div>

                            <div class="form-group">
                                <label for="observation">Observation:</label>
                                <textarea name="observation" class="form-control" rows="3">{{ old('observation', $charge->observation) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="pj">Attachments (if any):</label>
                                <input type="file" name="pj" class="form-control-file">
                                <!-- @if ($charge->pj)
                                    <p>Current Attachment: <a href="{{ asset('storage/' . $charge->pj) }}" target="_blank">View Attachment</a></p>
                                @else
                                    <p>No Attachment</p>
                                @endif -->
                            </div>

                            <button type="submit" class="btn btn-primary">Update Charge</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
