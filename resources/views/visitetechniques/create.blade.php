<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Create Visite Technique
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

        <form action="{{ route('visitetechniques.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div class="form-group">
                <label for="centre"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Centre:</label>
                <input type="text" name="centre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('centre') }}" required>
            </div>

            <div class="form-group">
                <label for="identicontrol"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Identification Control:</label>
                <input type="text" name="identicontrol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('identicontrol') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="nauturisation"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nauturisation:</label>
                <input type="text" name="nauturisation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('nauturisation') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="datevisite"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Visite:</label>
                <input type="date" id="datevisite" name="datevisite" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('datevisite')?: date('Y-m-d') }}" required>
            </div>

            <div class="form-group">
                <label for="duree"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duree:(mois)</label>
                <input type="number"  id="duree"name="duree" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('duree') }}" required>
            </div>

            <div class="form-group">
                <label for="datefin"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Fin:</label>
                <input type="text"  id="datefin" name="datefin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('datefin') }}" required>
            </div>

            <div class="form-group">
                <label for="prix"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prix:</label>
                <input type="number" name="prix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('prix') }}" required>
            </div>
            <div class="form-group">
                <label for="contact"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contact:</label>
                <input type="text" name="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('contact') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="observation"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Observation:</label>
                <input type="text" name="observation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('observation') }}" maxlength="100">
            </div>

            <div class="form-group">
                <label for="matricule"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Matricule:</label>
                <input type="text" name="matricule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('matricule') }}" maxlength="50" required>
            </div>

            <div class="form-group">
                <label for="module"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Module:</label>
                <input type="text" name="module" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('module') }}" maxlength="50">
            </div>

            <div class="form-group">
                <label for="pj">Document (PJ):</label>
                <input type="file" name="pj" class="form-control-file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="visitetechniquepic">Visite Technique Image:</label>
                <input type="file" name="visitetechniquepic" class="form-control-file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="etat"class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Etat:</label>
                <input type="text" name="etat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{ old('etat') }}" maxlength="50">
            </div>
         
            <div class="form-group">
                <label for="matricule_id">Matricule:</label>
                <select name="matricule_id" class="form-control">
                    <option value="" disabled selected>Select Matricule</option>
                    @foreach($nouvellevehicules as $nouvellevehicule)
                        <option value="{{ $nouvellevehicule->id }}" {{ old('nouvellevehicule_id') == $nouvellevehicule->id ? 'selected' : '' }}>
                            {{ $nouvellevehicule->matricule }}
                        </option>
                    @endforeach
                </select>
            </div>
          
            </div>
            <x-button type="submit">Add Visite Technique</x-button>
            <a href="{{ route('visitetechniques.index') }}" class="btn btn-cancel">Cancel</a>
        </form>
  
</div>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get references to the datevisite and duree inputs
            var datevisiteInput = document.getElementById('datevisite');
            var dureeInput = document.getElementById('duree');
            var datefinInput = document.getElementById('datefin');

            // Add event listeners to datevisite and duree inputs
            datevisiteInput.addEventListener('input', updateDateFin);
            dureeInput.addEventListener('input', updateDateFin);

            // Function to update the datefin input based on datevisite and duree

            function updateDateFin() {
        var datevisiteValue = datevisiteInput.value;
        var dureeValue = dureeInput.value;

        if (datevisiteValue && dureeValue) {
            var datevisite = new Date(datevisiteValue);

            // Calculate the datefin by adding duree months to datevisite
            datevisite.setMonth(datevisite.getMonth() + parseInt(dureeValue));

            // Format the datefin as 'MM/DD/YYYY'
            var formattedDateFin = (datevisite.getMonth() + 1).toString().padStart(2, '0') +
                '/' + datevisite.getDate().toString().padStart(2, '0') +
                '/' + datevisite.getFullYear();

            datefinInput.value = formattedDateFin;
        } else {
            datefinInput.value = '';
        }
    }
        });
    </script>      

    </x-app-layout>