<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Create New Charge
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

    <!-- Charge Create Form -->
    <form method="post" action="{{ route('charges.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="Motif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Motif:</label>
                <textarea name="Motif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="3" required>{{ old('Motif') }}</textarea>
            </div>
            <div>
                <label for="datechargee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Chargée:</label>
                <input type="date" name="datechargee" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('datechargee') }}" required>
            </div>
            <div>
                <label for="montant" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Montant:</label>
                <input type="number" name="montant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('montant') }}">
            </div>
            <div>
                <label for="observation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Observation:</label>
                <textarea name="observation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="3">{{ old('observation') }}</textarea>
            </div>
            <div>
                <label for="pj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Attachments (if any):</label>
                <input type="file" name="pj" class="form-control-file">
            </div>
        </div>

        <div>
            <x-button type="submit">Create Charge</x-button>
        </div>
    </form>
</x-app-layout>