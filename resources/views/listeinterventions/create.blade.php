

<x-app-layout>
            <x-slot name="header">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <h2 class="text-xl font-semibold leading-tight">
                    Create Intervention </h2>

                </div>

            </x-slot>
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
        <form action="{{ route('listeinterventions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6 mb-6 lg:grid-cols-2">

            <div class="form-group">
                <label for="typeinter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Type Intervention:</label>
                <input type="text" name="typeinter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('typeinter') }}" required>
            </div>

            <div class="form-group">
                <label for="dateinterve" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Intervention:</label>
                <input type="date" name="dateinterve" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('dateinterve') }}">
            </div>

            <div class="form-group">
                <label for="maticule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Matricule:</label>
                <input type="text" name="maticule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('maticule') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="vehicule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vehicule:</label>
                <input type="text" name="vehicule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('vehicule') }}" maxlength="10">
            </div>

            <div class="form-group">
                <label for="cout" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cout:</label>
                <input type="text" name="cout" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('cout') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="kilomactule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kilom Actule:</label>
                <input type="text" name="kilomactule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('kilomactule') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="prochenkilo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Proch. Kilo:</label>
                <input type="text" name="prochenkilo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('prochenkilo') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="pj">PJ:</label>
                <input type="file" name="pj" class="form-control-file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="observatio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Observation:</label>
                <textarea name="observatio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="3">{{ old('observatio') }}</textarea>
            </div>
            </div>

            <x-button type="submit" class="btn btn-primary">Save</x-button>
        </form>
    </div>
    </x-app-layout>