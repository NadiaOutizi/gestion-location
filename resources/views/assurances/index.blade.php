<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Assurances
            </h2>
        </div>
    </x-slot>

    <div class="overflow-x-auto md:overflow-x-hidden">
        <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-purple-950">
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">ID</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Assurance</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Numero Police</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Date Operation</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Matricule</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Vehicule</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Montant</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($assurances as $assurance)
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $assurance->id }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $assurance->assurance }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $assurance->numeropolice }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $assurance->Dateoperation }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $assurance->matricule }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $assurance->modele }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $assurance->prix }}</td>
                                <td py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6>
                                    <a href="{{ route('assurances.edit', $assurance->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                                    <form action="{{ route('assurances.destroy', $assurance->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>