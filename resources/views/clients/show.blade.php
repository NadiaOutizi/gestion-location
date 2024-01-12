<x-app-layout>
<x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
            Client Details
            </h2>
          
        </div>
    
    </x-slot>

    <ul>
        <li><strong>CIN:</strong> {{ $client->cin }}</li>
        <li><strong>Civility:</strong> {{ $client->civilite }}</li>
        <li><strong>Nationality:</strong> {{ $client->nationalite }}</li>
        <li><strong>First Name:</strong> {{ $client->nom }}</li>
        <li><strong>Last Name:</strong> {{ $client->prenom }}</li>
        <li><strong>Driver's License:</strong> {{ $client->permi }}</li>
        <li><strong>Passport:</strong> {{ $client->passeport }}</li>
        <li><strong>Address:</strong> {{ $client->adresse }}</li>
        <li><strong>City:</strong> {{ $client->ville }}</li>
        <li><strong>Postal Code:</strong> {{ $client->codepostal }}</li>
        <li><strong>Mobile Number:</strong> {{ $client->tele }}</li>
        <li><strong>Phone Number:</strong> {{ $client->telephone }}</li>
        <li><strong>Email:</strong> {{ $client->email }}</li>
        <li><strong>Notes:</strong> {{ $client->remarque }}</li>
        <li><strong>CIN Issue Date:</strong> {{ $client->datecin }}</li>
        <li><strong>Blacklist:</strong> {{ $client->listenoir }}</li>
        <li><strong>CIN Delivery:</strong> {{ $client->delivrecin }}</li>
        <li><strong>Driver's License Delivery:</strong> {{ $client->delivrepermi }}</li>
        <li><strong>Passport Delivery:</strong> {{ $client->delivrepassporte }}</li>
        <li><strong>Due Amount:</strong> {{ $client->doit }}</li>
        <li><strong>ICE:</strong> {{ $client->ice }}</li>
        <li><strong>Client Type:</strong> {{ $client->typeclient }}</li>
        <li><strong>File Number:</strong> {{ $client->numerodoss }}</li>
        <li><strong>Created At:</strong> {{ $client->created_at }}</li>
        <li><strong>Updated At:</strong> {{ $client->updated_at }}</li>
    </ul>

    <a href="{{ route('clients.index') }}">Back to Clients</a>

    </x-app-layout>
  