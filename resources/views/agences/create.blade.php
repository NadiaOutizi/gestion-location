<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Create Agence
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

    <!-- Agence Create Form -->
    <form method="post" action="{{ route('agences.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="Agence" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agence:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Agence" value="{{ old('Agence') }}" required>
            </div>

            <div>
                <label for="Adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Adresse:</label>
                <textarea name="Adresse" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="3" required>{{ old('Adresse') }}</textarea>
            </div>

            <div>
                <label for="Ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ville:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Ville" value="{{ old('Ville') }}">
            </div>

            <div>
                <label for="CodeP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Code Postal:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="CodeP" value="{{ old('CodeP') }}">
            </div>

            <div>
                <label for="GSM" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">GSM:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="GSM" value="{{ old('GSM') }}" required>
            </div>

            <div>
                <label for="gms" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">GMS:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="gms" value="{{ old('gms') }}">
            </div>

            <div>
                <label for="telefix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telephone Fixe:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="telefix" value="{{ old('telefix') }}">
            </div>

            <div>
                <label for="fax" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fax:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="fax" value="{{ old('fax') }}">
            </div>

            <div>
                <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email:</label>
                <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Email" value="{{ old('Email') }}">
            </div>

            <div>
                <label for="Nomfran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom France:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Nomfran" value="{{ old('Nomfran') }}">
            </div>

            <div>
                <label for="prenomFrance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prenom France:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="prenomFrance" value="{{ old('prenomFrance') }}">
            </div>

            <div>
                <label for="cine" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CINE:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="cine" value="{{ old('cine') }}">
            </div>

            <div>
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telephone:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="telephone" value="{{ old('telephone') }}">
            </div>

            <div>
                <label for="patent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Patent:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="patent" value="{{ old('patent') }}" required>
            </div>

            <div>
                <label for="rc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RC:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="rc" value="{{ old('rc') }}">
            </div>

            <div>
                <label for="iff" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">IFF:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="iff" value="{{ old('iff') }}">
            </div>

            <div>
                <label for="ice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ICE:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="ice" value="{{ old('ice') }}">
            </div>

            <div>
                <label for="cnss" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CNSS:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="cnss" value="{{ old('cnss') }}">
            </div>

            <div>
                <label for="Bancaire" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Information Bancaire:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Bancaire" value="{{ old('Bancaire') }}">
            </div>

            <div>
                <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logo:</label>
                <input type="file" class="form-control-file" name="logo">
            </div>

            <div>
                <label for="condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Condition:</label>
                <input type="file" class="form-control-file" name="condition">
            </div>
        </div>


        <div class="form-group">
            <x-button type="submit" class="btn btn-primary">Create Agence</x-button>
        </div>
    </form>
</x-app-layout>