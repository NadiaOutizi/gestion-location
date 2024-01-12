<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Create Traite
            </h2>

        </div>

    </x-slot>

    <!-- Display validation errors if any -->
    @if ($errors->any())
    <div>
        <strong>Validation errors:</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('traites.store') }}">
        @csrf
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="matricule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Matricule:</label>
                <input type="text" name="matricule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('matricule') }}">
            </div>

            <div class="form-group">
                <label for="datetrait" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Trait:</label>
                <input type="date" name="datetrait" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('datetrait') }}">
            </div>

            <div class="form-group">
                <label for="observation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Observation:</label>
                <input type="text" name="observation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('observation') }}">
            </div>

            <div class="form-group">
                <label for="montant" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Montant:</label>
                <input type="text" name="montant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('montant') }}">
            </div>

            <x-button type="submit" class="btn btn-primary">Create Traite</x-button>
    </form>
    </div>    
</div>
</x-app-layout>