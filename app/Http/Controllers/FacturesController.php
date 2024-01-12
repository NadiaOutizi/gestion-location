<?php

namespace App\Http\Controllers;

use App\Models\Factures;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factures = Factures::all();
        return view('factures.index', compact('factures'));
    }

    public function create()
    {
        $numerofacture = Factures::generateFactureNumber();

        return view('factures.create', compact('numerofacture'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'numerofacture' => 'required|string|max:50',
            'datefacture' => 'nullable|date',
            'client' => 'nullable|string|max:50',
            'lieufact' => 'nullable|string|max:50',
            'doit' => 'nullable|string|max:50',
            'ice' => 'nullable|string|max:50',
            'nombrecontrat' => 'nullable|string|max:50',
            'montantht' => 'nullable|string|max:50',
            'tva' => 'nullable|string|max:50',
            'montantttc' => 'nullable|string|max:50',
        ]);

        Factures::create($request->all());

        return redirect()->route('factures.index')->with('success', 'Facture created successfully');
    }

    public function edit(Factures $facture)
    {
        return view('factures.edit', compact('facture'));
    }

    public function update(Request $request, Factures $facture)
    {
        $request->validate([
            'numerofacture' => 'required|string|max:50',
            'datefacture' => 'nullable|date',
            'client' => 'nullable|string|max:50',
            'lieufact' => 'nullable|string|max:50',
            'doit' => 'nullable|string|max:50',
            'ice' => 'nullable|string|max:50',
            'nombrecontrat' => 'nullable|string|max:50',
            'montantht' => 'nullable|string|max:50',
            'tva' => 'nullable|string|max:50',
            'montantttc' => 'nullable|string|max:50',
        ]);

        $facture->update($request->all());

        return redirect()->route('factures.index')->with('success', 'Facture updated successfully');
    }

    public function destroy(Factures $facture)
    {
        $facture->delete();

        return redirect()->route('factures.index')->with('success', 'Facture deleted successfully');
    }
}
