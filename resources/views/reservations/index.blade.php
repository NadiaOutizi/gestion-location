<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Reservations
            </h2>
        </div>
    </x-slot>
    <form class="flex items-center" method="get" action="{{ route('chercher') }}">
        <label for="voice-search" class="sr-only">Nom</label>
        <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" name="query" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cin, Nom ou Prénom, Téléphone..." required="">
        </div>
    </form>


    <div class="overflow-x-auto md:overflow-x-hidden">
        <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class=" bg-purple-950">

                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Reservation Number</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Reservation Date</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Client</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Matricule</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Vehicle</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">DU</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">AU</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Jours</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Avance</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Note</th>


                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($reservations as $reservation)
                        <tr>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->numreservation }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->datereservation }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->client }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->matricuule }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->voiture }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->datedebut }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->datefin }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->jours }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->avance }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm">{{ $reservation->note }}</td>
                            <td py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6>



                                <div class="inline-block text-left" x-data="{ menu: false }">
                                    <button x-on:click="menu = ! menu" type="button" class="flex items-center text-gray-400 hover:text-gray-600 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                        <span class="sr-only"></span>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                    <div x-show="menu" x-on:click.away="menu = false" class="origin-top-right absolute right-32 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

                                        <div class="" role="none">
                                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="text-gray-500 font-medium hover:text-gray-900 hover:bg-gray-50 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                                Modifier
                                            </a>
                                        </div>
                                        <div class="" role="none">

                                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post" class="text-gray-500 font-medium hover:text-gray-900 hover:bg-gray-50 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>


</x-app-layout>