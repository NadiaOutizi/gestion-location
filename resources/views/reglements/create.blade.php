<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <h2 class="text-xl font-semibold leading-tight">
                    Create Reglement
                </h2>
            </div>
        </x-slot>


        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form method="POST" action="{{ route('reglements.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="numeroreglemnt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Numero Reglement:</label>
                    <input type="text" name="numeroreglemnt" class="form-control" value="{{ old('numeroreglemnt', $numeroreglemnt) }}" readonly>
                </div>

                <div>
                    <label for="dateregelement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Reglement:</label>
                    <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="dateregelement" value="{{ old('dateregelement')  ?: date('Y-m-d') }}" required>
                </div>

                <div>
                    <label for="Regler" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regler:</label>
                    <select class="form-select regler" name="Regler" id="ReglerSelect">
                        <option value="Contrat">Contrat</option>
                        <option value="Facture">Facture</option>
                    </select>
                </div>

                <div id="contratOptions" style="display: none;">
                    <label for="numerocontrat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Numero Contrat:</label>
                    <select class="form-select" name="numerocontrat" id="contrats">

                        @foreach($contractNumbers as $contractNumber)
                        <option value="{{ $contractNumber }}">{{ $contractNumber }}</option>
                        @endforeach
                    </select>
                </div>

                <div id="factureOptions" style="display: none;">
                    <label for="numerofacture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Numero Facture:</label>
                    <select class="form-select" name="numerofacture" id="factures">

                        @foreach($factureNumbers as $factureNumber)
                        <option value="{{ $factureNumber }}">{{ $factureNumber }}</option>
                        @endforeach
                    </select>
                </div>


                <div>
                    <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Client:</label>
                    <input type="text" id="clientInput" name="client" value="{{$client}}">




                </div>
                <div>
                    <label for="montantrest" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Montant Rest:</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="montantrest" value="{{ old('montantrest') }}" required>
                </div>

                <div>
                    <label for="typepaiement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Type Paiement:</label>
                    <select name="typepaiement" class="form-select" required>
                        <option value="Espèce" {{ old('typepaiement') == 'Espese' ? 'selected' : '' }}>Espèce</option>
                        <option value="Cheque" {{ old('typepaiement') == 'Cheque' ? 'selected' : '' }}>Chèque</option>
                        <option value="TPE" {{ old('typepaiement') == 'TPE' ? 'selected' : '' }}>TPE</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reglee:</label>
                    <div class="flex items-center space-x-4">
                        <label>
                            <input type="radio" name="Reglee" value="Yes" {{ old('Reglee') == 'Yes' ? 'checked' : '' }}>
                            <span class="ml-2">Yes</span>
                        </label>
                        <label>
                            <input type="radio" name="Reglee" value="No" {{ old('Reglee') == 'No' ? 'checked' : '' }}>
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
                <div>
                    <label for="pj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Attachment:</label>
                    <input type="file" class="form-control-file" name="pj">
                </div>
            </div>

            <div class="form-group">
                <x-button type="submit" class="btn btn-primary">Create Reglement</x-button>
            </div>
        </form>





        <script>
            document.addEventListener("DOMContentLoaded", function() {
                showOptions();
                var reglerSelect = document.getElementById("ReglerSelect");
                var contrats = document.getElementById("contrats");
                var factures = document.getElementById("factures");
                var clientInput = document.getElementById("clientInput");

                // Set default values on page load
                updateClientInfo(reglerSelect.value, (reglerSelect.value === "Contrat") ? contrats.value : factures.value);

                reglerSelect.addEventListener("change", function() {
                    showOptions();
                    updateClientInfo(reglerSelect.value, (reglerSelect.value === "Contrat") ? contrats.value : factures.value);
                });

                contrats.addEventListener("change", function() {
                    updateClientInfo(reglerSelect.value, contrats.value);
                });

                factures.addEventListener("change", function() {
                    updateClientInfo(reglerSelect.value, factures.value);
                });
            });

            function showOptions() {
                var reglerSelect = document.getElementById("ReglerSelect");
                var contratOptions = document.getElementById("contratOptions");
                var factureOptions = document.getElementById("factureOptions");

                if (reglerSelect.value === "Contrat") {
                    contratOptions.style.display = "block";
                    factureOptions.style.display = "none";
                } else if (reglerSelect.value === "Facture") {
                    contratOptions.style.display = "none";
                    factureOptions.style.display = "block";
                } else {
                    contratOptions.style.display = "none";
                    factureOptions.style.display = "none";
                }
            }

            function updateClientInfo(regler, number) {
                   console.log(regler)
                   console.log(number)
                // Make an AJAX request using Axios
                axios.post('{{ route("reglements.create") }}', {
                        regler: regler,
                        number: number,
                    }, {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                    })
                    .then(response => {
                        var data = response.data;
                          console.log(data) 
                          clientInput.value = data.client;
                    })
                    .catch(error => console.error('Error:', error));
            }
        </script>



    </x-app-layout>
</body>

</html>