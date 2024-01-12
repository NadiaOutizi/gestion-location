<x-app-layout>
<x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
            Edit Client
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


    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom:</label>
                <input id="first_name" value="{{ $client->nom }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="nom">
            </div>
            <div>
                <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prénom:</label>
                <input value="{{ $client->prenom }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="prenom">
            </div>
            <div>
                <label for="cin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CIN:</label>
                <input value="{{ $client->cin }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="cin">
            </div>
            <div>
                <label for="permi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permi:</label>
                <input value="{{ $client->permi }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="permi">
            </div>
            <div>
                <label for="civilite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Civilité:</label>
                <select id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="civilite" value="{{ $client->civilite }}">
                    <option>M</option>
                    <option>Mme</option>
                </select>

            </div>
            <div>
                <label for="nationalite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nationality:</label>
                <select name="nationalite" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    <option></option>
                    <option value='Afghan'>Afghan</option>
                    <option value='Albanais'>Albanais</option>
                    <option value='Algerien'>Algérien</option>
                    <option value='Allemand'>Allemand</option>
                    <option>Américain</option>
                    <option>Angolais</option>
                    <option>Argentin</option>
                    <option>Arménien</option>
                    <option>Arubais</option>
                    <option>Australien</option>
                    <option>Autrichien</option>
                    <option>Azerbaïdjanais</option>
                    <option>Bahaméen</option>
                    <option>Bangladais</option>
                    <option>Belge</option>
                    <option>Benin</option>
                    <option>Biélorusse</option>
                    <option>Birmain</option>
                    <option>Bolivien</option>
                    <option>Bosniaque</option>
                    <option>Botswanais</option>
                    <option>Bouthan</option>
                    <option>Brésilien</option>
                    <option>Britannique</option>
                    <option>Bulgare</option>
                    <option>Burkinabè</option>
                    <option>Burundais</option>
                    <option>Caïmanien</option>
                    <option>Cambodgien</option>
                    <option>Camerounais</option>
                    <option>Canadien</option>
                    <option>Chilien</option>
                    <option>Chinois</option>
                    <option>Chypriote</option>
                    <option>Colombien</option>
                    <option>Congolais</option>
                    <option>Costaricain</option>
                    <option>Croate</option>
                    <option>Cubain</option>
                    <option>Danois</option>
                    <option>Dominicain</option>
                    <option>Ecossais</option>
                    <option>Egyptien</option>
                    <option>Emirati</option>
                    <option>Equatorien</option>
                    <option>Espagnol</option>
                    <option>Estonien</option>
                    <option>Ethiopien</option>
                    <option>Européen</option>
                    <option>Finlandais</option>
                    <option>Français</option>
                    <option>Gabonais</option>
                    <option>Georgien</option>
                    <option>Ghanéen</option>
                    <option>Grec</option>
                    <option>Guatemala</option>
                    <option>Guinéen</option>
                    <option>Haïtien</option>
                    <option>Hollandais</option>
                    <option>Hondurien</option>
                    <option>Hong-Kong</option>
                    <option>Hongrois</option>
                    <option>Indien</option>
                    <option>Indonésien</option>
                    <option>Irakien</option>
                    <option>Iranien</option>
                    <option>Irlandais</option>
                    <option>Islandais</option>
                    <option>Israélien</option>
                    <option>Italien</option>
                    <option>Ivoirien</option>
                    <option>Jamaïcain</option>
                    <option>Japonais</option>
                    <option>Jordanien</option>
                    <option>Kazakh</option>
                    <option>Kenyan</option>
                    <option>Kirghiz</option>
                    <option>Kosovar</option>
                    <option>Koweïtien</option>
                    <option>Kurde</option>
                    <option>Laotien</option>
                    <option>Lésothien</option>
                    <option>Letton</option>
                    <option>Libanais</option>
                    <option>Libyen</option>
                    <option>Liechtenstein</option>
                    <option>Lituanien</option>
                    <option>Luxembourgeois</option>
                    <option>Macédonien</option>
                    <option>Madagascar</option>
                    <option>Malaisien</option>
                    <option>Malien</option>
                    <option>Maltais</option>
                    <option>Marocain</option>
                    <option>Mauritanien</option>
                    <option>Mauritien</option>
                    <option>Mexicain</option>
                    <option>Monégasque</option>
                    <option>Mongol</option>
                    <option>Mozambique</option>
                    <option>Namibien</option>
                    <option>Néo-Zélandais</option>
                    <option>Népalais</option>
                    <option>Nigérien</option>
                    <option>Nord Coréen</option>
                    <option>Norvégien</option>
                    <option>Pakistanais</option>
                    <option>Palestinien</option>
                    <option>Panaméen</option>
                    <option>Paraguayen</option>
                    <option>Péruvien</option>
                    <option>Philippiens</option>
                    <option>Polonais</option>
                    <option>Portoricain</option>
                    <option>Portugais</option>
                    <option>Qatar</option>
                    <option>Roumain</option>
                    <option>Russe</option>
                    <option>Rwandais</option>
                    <option>Saoudien</option>
                    <option>Sénégalais</option>
                    <option>Serbe</option>
                    <option>Serbo-Croate</option>
                    <option>Singapour</option>
                    <option>Slovaque</option>
                    <option>Soudanais</option>
                    <option>Soviétique</option>
                    <option>Sri-Lankais</option>
                    <option>Sud-Africain</option>
                    <option>Sud-Coréen</option>
                    <option>Suédois</option>
                    <option>Suisse</option>
                    <option>Syrien</option>
                    <option>Tadjik</option>
                    <option>Taïwanais</option>
                    <option>Tanzanien</option>
                    <option>Tchadien</option>
                    <option>Tchèque</option>
                    <option>Thaïlandais</option>
                    <option>Tunisien</option>
                    <option>Turc</option>
                    <option>Ukranien</option>
                    <option>Uruguayen</option>
                    <option>Vénézuélien</option>
                    <option>Vietnamien</option>
                    <option>Yéménite</option>
                    <option>Yougoslave</option>
                    <option>Zimbabwéen</option>
                </select>
            </div>


            <div>
                <label for="passeport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Passport:</label>
                <input id="first_name" value="{{ $client->passeport }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="passeport">
            </div>
            <div>
                <label for="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address:</label>
                <input id="first_name" value="{{ $client->adresse }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="adresse">
            </div>
            <div>
                <label for="ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ville:</label>
                <input id="first_name" value="{{ $client->ville }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="ville">
            </div>
            <div>
                <label for="codepostal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ZIP CODE:</label>
                <input id="first_name" value="{{ $client->codepostal }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="codepostal">
            </div>
            <div>
                <label for="tele" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Téléphone:</label>
                <input id="first_name" value="{{ $client->tele }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="tele" required>
            </div>
            <div>
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Télephone 2:</label>
                <input id="first_name" value="{{ $client->telephone }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="telephone">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email:</label>
                <input id="first_name" value="{{ $client->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="email" name="email">
            </div>
            <div>
                <label for="remarque" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remarque:</label>
                <input value="{{ $client->remarque }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="remarque">

            </div>
            <div>
                <label for="datecin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Validité Cin:</label>
                <input value="{{ $client->datecin }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="datecin">
            </div>
            <div>
                <label for="datepermi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Date Validité Permi:</label>
                <input value="{{ $client->datecin }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="datepermi">
            </div>

            <div>
                <label for="delivrecin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CIN Délivré à:</label>
                <input value="{{ $client->datepermi }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="delivrecin">
            </div>
            <div>
                <label for="delivrepermi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permi Délivré à:</label>
                <input  value="{{ $client->delivrepermi }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="delivrepermi">
            </div>
            <div>
                <label for="delivrepassporte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Passport Délivré à:</label>
                <input value="{{ $client->delivrepassporte }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="delivrepassporte">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 p-4">
                <label for="listenoir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Liste Noir:</label>


                <label>
        <input type="radio" value="OUI" class="peer hidden" name="listenoir">
        
        <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
            <h2 class="font-medium text-gray-700">OUI</h2>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
    </label>

    <label>
        <input type="radio" value="Non" class="peer hidden" name="listenoir">
        
        <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
            <h2 class="font-medium text-gray-700">NON</h2>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
    </label>



            </div>
            <div>
    <label for="typeclient" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Client Type:</label>
    <select value="{{ $client->typeclient }}" id="clientType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="typeclient">
      <option value="particulier">Particulier</option>
      <option value="professionnel">Professionnel</option>
    </select>
  </div>

  <div id="particulierFields" class="hidden">
    <div>
      <label for="numerodoss" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Numero Dossier:</label>
      <input value="{{ $client->numerodoss }}" id="numerodoss" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="numerodoss">
    </div>
    <div>
      <label for="doit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Doit:</label>
      <input value="{{ $client->doit }}" id="doit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="doit">
    </div>
    <div>
      <label for="ice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ICE:</label>
      <input value="{{ $client->ice }}" id="ice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="ice">
    </div>
  </div>
         <div>
         </div>       
            <div>
<label for="rectocin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RECTO CIN:</label>
<div class="px-4 py-6">
    <div id="image-preview1" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
        <input id="rectocin" class="bg-gray-50 border border-gray-300 hidden text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="rectocin" accept="image/*">
        <label for="rectocin" class="cursor-pointer">
            <img id="preview-image1" class="max-h-48 rounded-lg mx-auto" alt="Image preview"  />
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG, or GIF</b> format.</p>
            <span id="filename1" class="text-gray-500 bg-gray-200 z-50"></span>
        </label>
    </div>
    <div class="flex items-center justify-center" >
        <div class="w-full">
            <label class="w-full text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center mr-2 mb-2 cursor-pointer">
                <span class="text-center ml-2" >Upload</span>
            </label>
        </div>
    </div>
</div>
</div>
<div>
<label for="versocin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">VERSOCIN:</label>
<div class="px-4 py-6">
    <div id="image-preview2" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
        <input id="versocin" class="bg-gray-50 border border-gray-300 hidden text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="versocin" accept="image/*">
        <label for="versocin" class="cursor-pointer">
            <img id="preview-image2" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG, or GIF</b> format.</p>
            <span id="filename2" class="text-gray-500 bg-gray-200 z-50"></span>
        </label>
    </div>
    <div class="flex items-center justify-center">
        <div class="w-full">
            <label class="w-full text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center mr-2 mb-2 cursor-pointer">
                <span class="text-center ml-2">Upload</span>
            </label>
        </div>
    </div>
</div>
</div>
<div>
<label for="rectopermi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RECTOPERMI:</label>
<div class="px-4 py-6">
    <div id="image-preview3" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
        <input id="rectopermi" class="bg-gray-50 border border-gray-300 hidden text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="rectopermi" accept="image/*">
        <label for="rectopermi" class="cursor-pointer">
            <img id="preview-image3" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG, or GIF</b> format.</p>
            <span id="filename3" class="text-gray-500 bg-gray-200 z-50"></span>
        </label>
    </div>
    <div class="flex items-center justify-center">
        <div class="w-full">
            <label class="w-full text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center mr-2 mb-2 cursor-pointer">
                <span class="text-center ml-2 ">Upload</span>
            </label>
        </div>
    </div>
</div>
</div>
<div>
<label for="versopermi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">VERSOPERMI:</label>
<div class="px-4 py-6">
    <div id="image-preview4" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
        <input id="versopermi" class="bg-gray-50 border border-gray-300 hidden text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="versopermi" accept="image/*">
        <label for="versopermi" class="cursor-pointer">
            <img id="preview-image4" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG, or GIF</b></p>
            <span id="filename4" class="text-gray-500 bg-gray-200 z-50"></span>
        </label>
    </div>
    <div class="flex items-center justify-center">
        <div class="w-full">
            <label class="w-full text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center mr-2 mb-2 cursor-pointer">
                <span class="text-center ml-2">Upload</span>
            </label>
        </div>
    </div>
</div>  
</div>
<div>
<label for="rectopassport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RECTOPASSPORT:</label>
<div class="px-4 py-6">
    <div id="image-preview5" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
        <input id="rectopassport" class="bg-gray-50 border border-gray-300 hidden text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="rectopassport" accept="image/*">
        <label for="rectopassport" class="cursor-pointer">
            <img id="preview-image5" class="max-h-48 rounded-lg mx-auto" alt="Image preview"/>
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG, or GIF</b> format.</p>
            <span id="filename5" class="text-gray-500 bg-gray-200 z-50"></span>
        </label>
    </div>
    <div class="flex items-center justify-center">
        <div class="w-full">
            <label class="w-full text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center mr-2 mb-2 cursor-pointer">
                <span class="text-center ml-2 ">Upload</span>
            </label>
        </div>
    </div>
</div>
</div>
<div>
<label for="versopassport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">VERSOPASSPORT:</label>
<div class="px-4 py-6">
    <div id="image-preview6" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
        <input id="versopassport" class="bg-gray-50 border border-gray-300 hidden text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="versopassport" accept="image/*">
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
                <span class="text-center ml-2 ">Upload</span>
            </label>
        </div>
    </div>

</div>
            <!-- ENDS -->
            <!-- <div>
                <label for="versocin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">VERSO CIN:</label>
                <input id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="versocin" accept="image/*">
            </div>
            <div>
                <label for="rectopermi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RECTO PERMI:</label>
                <input id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="rectopermi" accept="image/*">
            </div>
            <div>
                <label for="versopermi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">VERSO PERMI:</label>
                <input id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="versopermi" accept="image/*">
            </div>
            <div>
                <label for="rectopassport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RECTO Passport:</label>
                <input id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="rectopassport" accept="image/*">
            </div>
            <div>
                <label for="versopassport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">VERSO Passport:</label>
                <input id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="versopassport" accept="image/*">
            </div> -->

            <div>
                <x-button type="submit">Update Client</x-button>
    </form>
    <script>
    document.getElementById('clientType').addEventListener('change', function() {
      var particulierFields = document.getElementById('particulierFields');
      if (this.value === 'professionnel') {
        particulierFields.classList.remove('hidden');
      } else {
        particulierFields.classList.add('hidden');
      }
    });
  </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function handleFileInput(inputId, previewId, filenameId) {
            const uploadInput = document.getElementById(inputId);
            const previewImage = document.getElementById(previewId);
            const filenameLabel = document.getElementById(filenameId);
          

            uploadInput.addEventListener('change', function () {
                const file = this.files[0];

                if (file) {
                    filenameLabel.textContent = file.name;

                    const reader = new FileReader();
                    reader.onload = function (e) {
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
        handleFileInput('rectocin', 'preview-image1', 'filename1');
        handleFileInput('versocin', 'preview-image2', 'filename2');
        handleFileInput('rectopermi', 'preview-image3', 'filename3');
        handleFileInput('versopermi', 'preview-image4', 'filename4');
        handleFileInput('rectopassport', 'preview-image5', 'filename5');
        handleFileInput('versopassport', 'preview-image6', 'filename6');
    });
</script>
    </div>

</x-app-layout>
