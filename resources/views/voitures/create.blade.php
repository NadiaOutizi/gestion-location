<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Create Nouvelle Voiture
            </h2>

        </div>

    </x-slot>
    <!-- Display validation errors if any -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('nouvellevehicules.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-6 mb-6 lg:grid-cols-2">

            <div class="form-group">
                <label for="numerochassis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Numero Chassis:</label>
                <input type="text" name="numerochassis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('numerochassis') }}">
            </div>

            <div class="form-group">
                <label for="matricule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Matricule:</label>
                <input type="text" name="matricule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('matricule') }}" required>
            </div>

            <div class="form-group">
                <label for="marque" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Marque:</label>
                <input type="text" name="marque" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('marque') }}">
            </div>

            <div class="form-group">
                <label for="module" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Module:</label>
                <input type="text" name="module" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('module') }}">
            </div>

            <div class="form-group" >
                <label for="datamisecirc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Mise en Circulation:</label>
                <input type="date" name="datamisecirc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('datamisecirc') ?: date('Y-m-d') }}">
            </div>

            <div class="form-group" >
                <label for="nombredplace" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre de Places:</label>
                <input type="number" name="nombredplace" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('nombredplace') }}">
            </div>
            <div class="form-group">
                <label for="kilometrage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kilometrage:</label>
                <input type="text" name="kilometrage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('kilometrage') }}">
            </div>

            <div class="form-group">
                <label for="prixlocation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prix de Location:</label>
                <input type="number" name="prixlocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('prixlocation') }}">
            </div>

            <div class="form-group">
                <label for="colorvehicule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Couleur du Véhicule:</label>
                <input type="text" name="colorvehicule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('colorvehicule') }}">
            </div>

            <div class="form-group">
                <label for="typedecarburant" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Type de Carburant:</label>
                <input type="text" name="typedecarburant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('typedecarburant') }}">
            </div>

            <div class="form-group">
                <label for="carburant" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Carburant:</label>
                <input type="text" name="carburant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('carburant') }}">
            </div>

            <div class="form-group" >
                <label for="etatvoiture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">État de la Voiture:</label>
                <input type="text" name="etatvoiture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('etatvoiture') }}">
            </div>

            <div class="form-group">
                <label for="accessoir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Accessoires:</label>
                <textarea name="accessoir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('accessoir') }}</textarea>
            </div>

            <div class="form-group">
                <label for="observation"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Observation:</label>
                <textarea name="observation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('observation') }}</textarea>
            </div>

            <div class="form-group">
                <label for="Dateautorisation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date d'Autorisation:</label>
                <input type="date" name="Dateautorisation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('Dateautorisation') ?: date('Y-m-d')}}">
            </div>

            <div class="form-group">
                <label for="Dateautorisationv" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date d'Autorisation de Validité:</label>
                <input type="date" name="Dateautorisationv" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('Dateautorisationv') ?: date('Y-m-d') }}">
            </div>

            <div class="form-group">
                <label for="DateCarteGrise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date de Carte Grise:</label>
                <input type="date" name="DateCarteGrise" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('DateCarteGrise') ?: date('Y-m-d') }}">
            </div>

            <div class="form-group">
                <label for="DateCarteGrisev" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date de Carte Grise de Validité:</label>
                <input type="date" name="DateCarteGrisev" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('DateCarteGrisev') ?: date('Y-m-d') }}">
            </div>

            <div class="form-group">
                <label for="imagevoiture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image Voiture:</label>
                <input type="file" name="imagevoiture" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="imageatourisatio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image Autorisation:</label>
                <input type="file" name="imageatourisatio" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="imagerectocviste" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image Recto CViste:</label>
                <input type="file" name="imagerectocviste" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="imageversovisite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image Verso Visite:</label>
                <input type="file" name="imageversovisite" class="form-control-file">
            </div>

            <x-button type="submit" class="btn btn-primary">Create Nouvelle Voiture</x-button>
        </div>

    </form>
</x-app-layout>