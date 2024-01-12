<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Create Infraction
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

    <!-- Infraction Create Form -->
    <form action="{{ route('infractions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="numeroinfra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Numero Infraction:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="numeroinfra" value="{{ old('numeroinfra') }}" required>
            </div>
            <div>
                <label for="matricule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Matricule:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="matricule" value="{{ old('matricule') }}">
            </div>
            <div>
                <label for="vehicule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vehicule:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="vehicule" value="{{ old('vehicule') }}">
            </div>
            <div>
                <label for="dateinfraction" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Infraction:</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="dateinfraction" value="{{ old('dateinfraction')?: date('Y-m-d') }}">
            </div>
            <div>
                <label for="heure" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Heure:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="heure" value="{{ old('heure') }}">
            </div>
            <div>
                <label for="min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Min:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="min" value="{{ old('min') }}">
            </div>
            <div>
                <label for="faita" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fait à:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="faita" value="{{ old('faita') }}">
            </div>
            <div>
                <label for="faitele" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fait le:</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="faitele" value="{{ old('faitele') ?: date('Y-m-d')}}">
            </div>
            <div>
                <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Client:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="client" value="{{ old('client') }}">
            </div>
            <div>
                <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permi:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="permi" value="{{ old('permi') }}">
            </div>
            <div>
                <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cin:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="cin" value="{{ old('cin') }}">
            </div>
            <div>
                <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Passport:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="passport" value="{{ old('passport') }}">
            </div>
            <div>
                <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Adresse:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="adresse" value="{{ old('adresse') }}">
            </div>
            <div>
                <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Télephone:</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="telephone" value="{{ old('telephone') }}">
            </div>
            
            <div></div>
            <div></div>
            <!-- Add other form fields as needed -->
            <div>
                <label for="versopassport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image (pj):</label>
                <div class="px-4 py-6">
                    <div id="image-preview6" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
                        <input id="versopassport" class="bg-gray-50 border border-gray-300 hidden text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="pj" accept="image/*">
                        <label for="versopassport" class="cursor-pointer">
                            <img id="preview-image6" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
                            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
                            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG, or GIF</b> format.</p>
                            <span id="filename6" class="text-gray-500 bg-gray-200 z-50"></span>
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="w-full">
                            <label class="w-full text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center mr-2 mb-2 cursor-pointer">
                                <span class="text-center ml-2 cancel">Cancel</span>
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div>
    
    <x-button type="submit">Create Infraction</x-button>
    </div>

    </form>
    </div>
    

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function handleFileInput(inputId, previewId, filenameId) {
                const uploadInput = document.getElementById(inputId);
                const previewImage = document.getElementById(previewId);
                const filenameLabel = document.getElementById(filenameId);


                uploadInput.addEventListener('change', function() {
                    const file = this.files[0];

                    if (file) {
                        filenameLabel.textContent = file.name;

                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewImage.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    } else {
                        filenameLabel.textContent = '';
                        previewImage.src = ''; // Clear the preview
                    }
                });
            }


            // Call the function for each file input
            handleFileInput('versopassport', 'preview-image6', 'filename6');

        });
    </script>
</x-app-layout>