    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Agences</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Agence</th>
                                    <th>Adresse</th>
                                    <th>Ville</th>
                                    <th>Code Postal</th>
                                    <th>GSM</th>
                                    <th>GMS</th>
                                    <th>Telefix</th>
                                    <th>Fax</th>
                                    <th>Email</th>
                                    <th>Nom Français</th>
                                    <th>Prénom Français</th>
                                    <th>CIN Entreprise</th>
                                    <th>Téléphone</th>
                                    <th>Patent</th>
                                    <th>RC</th>
                                    <th>IFF</th>
                                    <th>ICE</th>
                                    <th>CNSS</th>
                                    <th>Information Bancaire</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agences as $agence)
                                <tr>
                                    <td>{{ $agence->id }}</td>
                                    <td>{{ $agence->Agence }}</td>
                                    <td>{{ $agence->Adresse }}</td>
                                    <td>{{ $agence->Ville }}</td>
                                    <td>{{ $agence->CodeP }}</td>
                                    <td>{{ $agence->GSM }}</td>
                                    <td>{{ $agence->gms }}</td>
                                    <td>{{ $agence->telefix }}</td>
                                    <td>{{ $agence->fax }}</td>
                                    <td>{{ $agence->Email }}</td>
                                    <td>{{ $agence->Nomfran }}</td>
                                    <td>{{ $agence->prenomFrance }}</td>
                                    <td>{{ $agence->cine }}</td>
                                    <td>{{ $agence->telephone }}</td>
                                    <td>{{ $agence->patent }}</td>
                                    <td>{{ $agence->rc }}</td>
                                    <td>{{ $agence->iff }}</td>
                                    <td>{{ $agence->ice }}</td>
                                    <td>{{ $agence->cnss }}</td>
                                    <td>{{ $agence->Bancaire }}</td>
                                    <td>
                                        <a href="{{ route('agences.edit', $agence->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('agences.destroy', $agence->id) }}" class="btn btn-primary">Delete</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>