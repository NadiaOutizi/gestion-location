<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Create Assurance
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

    <!-- Assurance Create Form -->
    <form action="{{ route('assurances.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="assurance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Assurance:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="assurance" value="{{ old('assurance') }}" required>
            </div>

            <div>
                <label for="numeropolice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Numero Police:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="numeropolice" value="{{ old('numeropolice') }}">
            </div>

            <div>
                <label for="Dateoperation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Operation:</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Dateoperation" value="{{ old('Dateoperation') }}">
            </div>

            <div>
                <label for="heuredebut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Heure Debut:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="heuredebut" value="{{ old('heuredebut') }}">
            </div>

            <div>
                <label for="datedebut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Debut:</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="datedebut" value="{{ old('datedebut') }}">
            </div>

            <div>
                <label for="dureemois" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duree Mois:</label>
                <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="dureemois" value="{{ old('dureemois') }}">
            </div>

            <div>
                <label for="datefin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Fin:</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="datefin" value="{{ old('datefin') }}">
            </div>

            <div>
                <label for="prix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prix:</label>
                <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="prix" value="{{ old('prix') }}">
            </div>

            <div>
                <label for="contactass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contact Assurance:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="contactass" value="{{ old('contactass') }}">
            </div>

            <div>
                <label for="observation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Observation:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="observation" value="{{ old('observation') }}">
            </div>

            <div>
                <label for="matricule_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Matricule:</label>
                <select name="matricule_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @foreach ($nouvellevoitures as $nouvellevoiture)
                        <option value="{{ $nouvellevoiture->id }}">{{ $nouvellevoiture->matricule }}</option>
                    @endforeach
                </select>
            </div>
               

            <div>
                <label for="modele" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Modele:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="modele" value="{{ old('modele') }}">
            </div>

            <div>
                <label for="assurancepic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Assurance Picture:</label>
                <input type="file" class="form-control-file" name="assurancepic">
            </div>

            <div>
                <label for="pjpic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">PJ Picture:</label>
                <input type="file" class="form-control-file" name="pjpic">
            </div>

            <div>
                <label for="etat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Etat:</label>
                <input type="text"  name="etat"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"value="{{ old('etat') }}">
            </div>

   
        </div>

        <!-- Additional Form Fields -->

        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <!-- Add more fields here -->
        </div>

        <div class="form-group">
            <x-button type="submit" class="btn btn-primary">Create Assurance</x-button>
        </div>
    </form>
</x-app-layout>