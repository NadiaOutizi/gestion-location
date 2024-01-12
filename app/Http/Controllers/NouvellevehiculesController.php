<?php

namespace App\Http\Controllers;

use App\Models\Nouvellevoitures;
use Illuminate\Http\Request;

class NouvellevehiculesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Nouvellevoitures::all();
        return view('voitures.index', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voitures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numerochassis' => 'nullable|string|max:50',
            'matricule' => 'required|string|max:50',
            'marque' => 'nullable|string|max:50',
            'module' => 'nullable|string|max:50',
            'datamisecirc' => 'nullable|date',
            'nombredplace' => 'nullable|string|max:10',
            'kilometrage' => 'nullable|string|max:50',
            'prixlocation' => 'nullable|numeric',
            'colorvehicule' => 'nullable|string|max:50',
            'typedecarburant' => 'nullable|string|max:50',
            'carburant' => 'nullable|string|max:50',
            'etatvoiture' => 'nullable|string|max:50',
            'accessoir' => 'nullable|string|max:200',
            'observation' => 'nullable|string',
            'Dateautorisation' => 'nullable|date',
            'Dateautorisationv' => 'nullable|date',
            'DateCarteGrise' => 'nullable|date',
            'DateCarteGrisev' => 'nullable|date',
            'imagevoiture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageatourisatio' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imagerectocviste' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageversovisite' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        $nouvelleVoiture = new Nouvellevoitures([
            'numerochassis' => $request->input('numerochassis'),
            'matricule' => $request->input('matricule'),
            'marque' => $request->input('marque'),
            'module' => $request->input('module'),
            'datamisecirc' => $request->input('datamisecirc'),
            'nombredplace' => $request->input('nombredplace'),
            'kilometrage' => $request->input('kilometrage'),
            'prixlocation' => $request->input('prixlocation'),
            'colorvehicule' => $request->input('colorvehicule'),
            'typedecarburant' => $request->input('typedecarburant'),
            'carburant' => $request->input('carburant'),
            'etatvoiture' => $request->input('etatvoiture'),
            'accessoir' => $request->input('accessoir'),
            'observation' => $request->input('observation'),
            'Dateautorisation' => $request->input('Dateautorisation'),
            'Dateautorisationv' => $request->input('Dateautorisationv'),
            'DateCarteGrise' => $request->input('DateCarteGrise'),
            'DateCarteGrisev' => $request->input('DateCarteGrisev'),
        ]);
        
        // Handle file uploads
        if ($request->hasFile('imagevoiture')) {
            $nouvelleVoiture->imagevoiture = $request->file('imagevoiture')->store('images');
        }
        
        if ($request->hasFile('imageatourisatio')) {
            $nouvelleVoiture->imageatourisatio = $request->file('imageatourisatio')->store('images');
        }
        
        if ($request->hasFile('imagerectocviste')) {
            $nouvelleVoiture->imagerectocviste = $request->file('imagerectocviste')->store('images');
        }
        
        if ($request->hasFile('imageversovisite')) {
            $nouvelleVoiture->imageversovisite = $request->file('imageversovisite')->store('images');
        }
        
        $nouvelleVoiture->save();

        return redirect()->route('nouvellevehicules.index')->with('success', 'Nouvelle voiture created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $voitures = Nouvellevoitures::findOrFail($id);
        return view('voitures.edit', compact('voitures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'numerochassis' => 'nullable|string|max:50',
            'matricule' => 'required|string|max:50',
            'marque' => 'nullable|string|max:50',
            'module' => 'nullable|string|max:50',
            'datamisecirc' => 'nullable|date',
            'nombredplace' => 'nullable|string|max:10',
            'kilometrage' => 'nullable|string|max:50',
            'prixlocation' => 'nullable|numeric',
            'colorvehicule' => 'nullable|string|max:50',
            'typedecarburant' => 'nullable|string|max:50',
            'carburant' => 'nullable|string|max:50',
            'etatvoiture' => 'nullable|string|max:50',
            'accessoir' => 'nullable|string|max:200',
            'observation' => 'nullable|string',
            'Dateautorisation' => 'nullable|date',
            'Dateautorisationv' => 'nullable|date',
            'DateCarteGrise' => 'nullable|date',
            'DateCarteGrisev' => 'nullable|date',
            'imagevoiture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageatourisatio' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imagerectocviste' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageversovisite' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $nouvelleVoiture = Nouvellevoitures::findOrFail($id);
        $nouvelleVoiture->update([
            'numerochassis' => $request->input('numerochassis'),
            'matricule' => $request->input('matricule'),
            'marque' => $request->input('marque'),
            'module' => $request->input('module'),
            'datamisecirc' => $request->input('datamisecirc'),
            'nombredplace' => $request->input('nombredplace'),
            'kilometrage' => $request->input('kilometrage'),
            'prixlocation' => $request->input('prixlocation'),
            'colorvehicule' => $request->input('colorvehicule'),
            'typedecarburant' => $request->input('typedecarburant'),
            'carburant' => $request->input('carburant'),
            'etatvoiture' => $request->input('etatvoiture'),
            'accessoir' => $request->input('accessoir'),
            'observation' => $request->input('observation'),
            'Dateautorisation' => $request->input('Dateautorisation'),
            'Dateautorisationv' => $request->input('Dateautorisationv'),
            'DateCarteGrise' => $request->input('DateCarteGrise'),
            'DateCarteGrisev' => $request->input('DateCarteGrisev'),
        ]);

            // Handle file updates
            if ($request->hasFile('imagevoiture')) {
                $nouvelleVoiture->imagevoiture = $request->file('imagevoiture')->store('images');
            }

            if ($request->hasFile('imageatourisatio')) {
                $nouvelleVoiture->imageatourisatio = $request->file('imageatourisatio')->store('images');
            }

            if ($request->hasFile('imagerectocviste')) {
                $nouvelleVoiture->imagerectocviste = $request->file('imagerectocviste')->store('images');
            }

            if ($request->hasFile('imageversovisite')) {
                $nouvelleVoiture->imageversovisite = $request->file('imageversovisite')->store('images');
            }

            return redirect()->route('nouvellevehicules.index')->with('success', 'Nouvelle voiture updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nouvelleVoiture = Nouvellevoitures::findOrFail($id);
        $nouvelleVoiture->delete();

        return redirect()->route('nouvellevehicules.index')->with('success', 'Nouvelle voiture deleted successfully');
    }
}
