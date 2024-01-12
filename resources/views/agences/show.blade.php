
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ $agence->Agence }} Details
            </h2>
        </div>
    </x-slot>

    <div class="my-4">
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

        <!-- Edit agency form -->
        <form method="post" action="{{ route('agences.update', $agence) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="Agence" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agence:</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Agence" value="{{ old('Agence', $agence->Agence) }}" required>
                </div>

                <div>
                    <label for="Adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Adresse:</label>
                    <textarea name="Adresse" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="3" required>{{ old('Adresse', $agence->Adresse) }}</textarea>
                </div>

                <div>
                    <label for="Ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ville:</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Ville" value="{{ old('Ville', $agence->Ville) }}">
                </div>

                <div>
                    <label for="CodeP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Code Postal:</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="CodeP" value="{{ old('CodeP', $agence->CodeP) }}">
                </div>

                <div>
                    <label for="GSM" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">GSM:</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="GSM" value="{{ old('GSM', $agence->GSM) }}" required>
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
                <x-button type="submit" class="btn btn-primary">Update Agence</x-button>
            </div>
        </form>
    </div>
</x-app-layout>
