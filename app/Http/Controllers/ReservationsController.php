<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservations::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $numeroreservation = Reservations::generateReservationNumber();
        return view('reservations.create',compact('numeroreservation'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'numreservation' => 'number|max:50',
            'cin' => 'nullable|string|max:50',
            'client' => 'nullable|string|max:50',
            'valcin' => 'nullable|string|max:50',
            'permi' => 'nullable|string|max:50',
            'valpermi' => 'nullable|string|max:50',
            'datereservation' => 'nullable|date',
            'datedebut' => 'nullable|date',
            'etat' => 'nullable|string|max:50',
            'jours' => 'nullable|string|max:50',
            'datefin' => 'nullable|date',
            'matricuule' => 'nullable|string|max:50',
            'voiture' => 'nullable|string|max:50',
            'prixjourne' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'avance' => 'nullable|numeric',
            'note' => 'nullable|string|max:200',
            'DCIN' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpermi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpasspor' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'adresse' => 'nullable|string|max:200',
            'telephone' => 'nullable|string|max:200',
            'passport' => 'nullable|string|max:200',
            'valpass' => 'nullable|string|max:50',
        ]);
        
        // Create a new reservation instance and save it to the database
        Reservations::create($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }

    public function show(Reservations $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservations $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservations $reservation)
    {
        $request->validate([
            'numreservation' => 'required|string|max:50',
            'cin' => 'nullable|string|max:50',
            'client' => 'nullable|string|max:50',
            'valcin' => 'nullable|string|max:50',
            'permi' => 'nullable|string|max:50',
            'valpermi' => 'nullable|string|max:50',
            'datereservation' => 'nullable|date',
            'datedebut' => 'nullable|date',
            'etat' => 'nullable|string|max:50',
            'jours' => 'nullable|string|max:50',
            'datefin' => 'nullable|date',
            'matricuule' => 'nullable|string|max:50',
            'voiture' => 'nullable|string|max:50',
            'prixjourne' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'avance' => 'nullable|numeric',
            'note' => 'nullable|string|max:200',
            'DCIN' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpermi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpasspor' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'adresse' => 'nullable|string|max:200',
            'telephone' => 'nullable|string|max:200',
            'passport' => 'nullable|string|max:200',
            'valpass' => 'nullable|string|max:50',
        ]);
        

        // Update the reservation instance with the new data
        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reservations $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }
}
