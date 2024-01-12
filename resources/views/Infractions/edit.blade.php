<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
            Edit Infraction
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

        <!-- Infraction Edit Form -->
        <form action="{{ route('infraction.update', $infraction->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="numeroinfra">Numero Infraction:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="numeroinfra" value="{{ old('numeroinfra', $infraction->numeroinfra) }}" required>
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="matricule">Matricule:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="matricule" value="{{ old('matricule', $infraction->matricule) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="vehicule">Vehicule:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="vehicule" value="{{ old('vehicule', $infraction->vehicule) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="dateinfraction">Date Infraction:</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="dateinfraction" value="{{ old('dateinfraction', $infraction->dateinfraction) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="heure">Heure:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="heure" value="{{ old('heure', $infraction->heure) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="min">Min:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="min" value="{{ old('min', $infraction->min) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="faita">Fait à:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="faita" value="{{ old('faita', $infraction->faita) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="faitele">Fait le:</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="faitele" value="{{ old('faitele', $infraction->faitele) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="client">Client:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="client" value="{{ old('client', $infraction->client) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="client">Permi:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="permi" value="{{ old('permi', $infraction->permi) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="client">Cin:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="cin" value="{{ old('cin', $infraction->cin) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="client">Passport:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="passport" value="{{ old('passport', $infraction->passport) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="client">Adresse:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="adresse" value="{{ old('adresse', $infraction->adresse) }}">
            </div>
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="client">Télephone:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="telephone" value="{{ old('telephone', $infraction->telephone) }}">
            </div>

            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <label for="pj">Image (pj):</label>
                <input type="file" class="form-control-file" name="pj">
            </div>
            
            <x-button type="submit" class="btn btn-primary">Update Infraction</x-button>
        </form>
    </div>




    </x-app-layout>