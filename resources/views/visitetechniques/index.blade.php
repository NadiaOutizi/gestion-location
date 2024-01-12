<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
            Contrat List
            </h2>
            <a href="{{ route('visitetechniques.create') }}" class="btn btn-primary">Create New Visite Technique</a>

        </div>

    </x-slot>
    <div class="overflow-x-auto md:overflow-x-hidden">
        @if ($visitetechniques->isEmpty())
            <p>No visite techniques found.</p>
        @else
            <div class="inline-block min-w-full py-2 align-middle">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-purple-950">
                            <tr>
                        <th>ID</th>
                        <th>Centre</th>
                        <th>Identification Control</th>
                        <th>Nauturisation</th>
                        <th>Date Visite</th>
                        <th>Duree</th>
                        <th>Date Fin</th>
                        <th>Prix</th>
                        <th>Contact</th>
                        <th>Observation</th>
                        <th>Matricule</th>
                        <th>Module</th>
                        <th>Etat</th>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($visitetechniques as $visitetechnique)
                        <tr>
                            <td>{{ $visitetechnique->id }}</td>
                            <td>{{ $visitetechnique->centre }}</td>
                            <td>{{ $visitetechnique->identicontrol }}</td>
                            <td>{{ $visitetechnique->nauturisation }}</td>
                            <td>{{ $visitetechnique->datevisite }}</td>
                            <td>{{ $visitetechnique->duree }}</td>
                            <td>{{ $visitetechnique->datefin }}</td>
                            <td>{{ $visitetechnique->prix }}</td>
                            <td>{{ $visitetechnique->contact }}</td>
                            <td>{{ $visitetechnique->observation }}</td>
                            <td>{{ $visitetechnique->matricule }}</td>
                            <td>{{ $visitetechnique->module }}</td>
                            <td>{{ $visitetechnique->etat }}</td>
                            <td>
                                <a href="{{ route('visitetechniques.edit', $visitetechnique->id) }}"  class="btn btn-edit">Edit</a>
                                <a href="{{ route('visitetechniques.destroy', $visitetechnique->id) }}" class="btn btn-delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

</x-app-layout>