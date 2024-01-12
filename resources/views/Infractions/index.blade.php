<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Infractions List
            </h2>
        </div>
    </x-slot>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form class="flex items-center" method="get" action="{{ route('chercher') }}">
        <label for="voice-search" class="sr-only">Nom</label>
        <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" name="query" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Numero Infraction, Matricule, Marque..." required="">
        </div>
    </form>
    <div class="overflow-x-auto md:overflow-x-hidden">
        <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-purple-950 text-white">
                        <tr>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">ID</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Numero Infraction</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Matricule</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Vehicule</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Date Infraction</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Heure</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Min</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Fait à</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Fait le</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Client</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($infractions as $infraction)
                        <tr>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->id }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->numeroinfra }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->matricule }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->vehicule }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->dateinfraction }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->heure }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->min }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->faita }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->faitele }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $infraction->client }}</td>
                            <td py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6>
                                <div class="inline-block text-left" x-data="{ menu: false }">
                                    <a href="{{ route('infraction.show', $infraction->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('infraction.edit', $infraction->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('infraction.destroy', $infraction->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</x-app-layout> 