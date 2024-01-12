
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Create Reservation
            </h2>
        </div>
    </x-slot>

    <!-- Display validation errors if any -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Reservation Create Form -->
    <form method="POST" action="{{ route('reservations.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <!-- Reservation Number -->
            <div>
                <label for="numreservation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reservation Number:</label>
                <input type="text" name="numeroreservation" class="form-control" value="{{ old('numeroreservation', $numeroreservation) }}" readonly>
            </div>

            <div class="form-group">
                <label for="cin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CIN:</label>
                <input type="text" name="cin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('cin') }}" maxlength="50">
            </div>
            <div class="form-group">
                <label for="valcin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CIN Validation:</label>
                <input type="text" name="valcin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('valcin') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Client:</label>
                <input type="text" name="client" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('client') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="permi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Driver's License:</label>
                <input type="text" name="permi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('permi') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="valpermi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Driver's License Validation:</label>
                <input type="text" name="valpermi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('valpermi') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="datereservation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reservation Date:</label>
                <input type="date" name="datereservation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('datereservation')?: date('Y-m-d') }}">
            </div>

            <div class="form-group">
                <label for="datedebut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Start Date:</label>
                <input type="date" name="datedebut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('datedebut')?: date('Y-m-d') }}">
            </div>
            <div class="form-group">
                <label for="datefin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">End Date:</label>
                <input type="text" name="datefin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('datefin') }}">
            </div>

            <div class="form-group">
                <label for="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address:</label>
                <input type="text" name="adresse" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('adresse') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telephone:</label>
                <input type="text" name="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('telephone') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="passport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Passport:</label>
                <input type="text" name="passport" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('passport') }}" maxlength="200">
            </div>

            <div class="form-group">
                <label for="valpass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Passport Validation:</label>
                <input type="text" name="valpass" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('valpass') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="matricuule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Matricule:</label>
                <input type="text" name="matricuule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('matricuule') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="voiture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vehicle:</label>
                <input type="text" name="voiture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('voiture') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="prixjourne" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price per Day:</label>
                <input type="number" name="prixjourne" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('prixjourne') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Total:</label>
                <input type="number" name="total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('total') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="avance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Advance:</label>
                <input type="number" name="avance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('avance') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Note:</label>
                <textarea name="note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="3">{{ old('note') }}</textarea>
            </div>
            <div class="form-group">
                <label for="jours" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jours:</label>
                <input type="text" name="jours" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('jours') }}" maxlength="50">
            </div>


            <div class="form-group">
                <label for="dpasspor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Passport Image:</label>
                <input type="file" name="dpasspor" class="form-control-file" accept="image/*">
            </div>
            <div class="form-group">
                <label for="DCIN" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CIN Image:</label>
                <input type="file" name="DCIN" class="form-control-file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="dpermi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Driver's License Image:</label>
                <input type="file" name="dpermi" class="form-control-file" accept="image/*">
            </div>


            <x-button type="submit" class="btn btn-primary">Create Reservation</x-button>
            </div>
    </form>
</x-app-layout>
