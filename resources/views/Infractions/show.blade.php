@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Infraction Details</h2>

        <!-- Display Infraction Details -->
        <table class="table">
            <tbody>
                <tr>
                    <th>ID:</th>
                    <td>{{ $infraction->id }}</td>
                </tr>
                <tr>
                    <th>Numero Infraction:</th>
                    <td>{{ $infraction->numeroinfra }}</td>
                </tr>
                <tr>
                    <th>Matricule:</th>
                    <td>{{ $infraction->matricule }}</td>
                </tr>
                <tr>
                    <th>Vehicule:</th>
                    <td>{{ $infraction->vehicule }}</td>
                </tr>
                <tr>
                    <th>Date Infraction:</th>
                    <td>{{ $infraction->dateinfraction }}</td>
                </tr>
                <tr>
                    <th>Heure:</th>
                    <td>{{ $infraction->heure }}</td>
                </tr>
                <tr>
                    <th>Min:</th>
                    <td>{{ $infraction->min }}</td>
                </tr>
                <tr>
                    <th>Fait à:</th>
                    <td>{{ $infraction->faita }}</td>
                </tr>
                <tr>
                    <th>Fait le:</th>
                    <td>{{ $infraction->faitele }}</td>
                </tr>
                <tr>
                    <th>Client:</th>
                    <td>{{ $infraction->client }}</td>
                </tr>
                <!-- Add other fields as needed -->
                <!-- <tr>
                    <th>Image (pj):</th>
                    <td>
                        @if($infraction->pj)
                            <img src="{{ asset('storage/images/'.$infraction->pj) }}" alt="Infraction Image" style="max-width: 300px;">
                        @else
                            No Image
                        @endif
                    </td>
                </tr> -->
            </tbody>
        </table>

        <!-- Back button to go back to the index page -->
        <a href="{{ route('infraction.index') }}" class="btn btn-secondary">Back to Infractions List</a>
    </div>
@endsection
