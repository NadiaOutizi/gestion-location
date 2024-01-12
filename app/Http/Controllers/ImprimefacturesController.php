<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imprimefactures;

class ImprimefacturesController extends Controller
{
    public function index()
    {
        $imprimefactures = Imprimefactures::all();
        return view('imprimefactures.index', compact('imprimefactures'));
    }

    public function create()
    {
        return view('imprimefactures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vehicule' => 'nullable|string|max:50',
            'matricule' => 'nullable|string|max:50',
            'jours' => 'nullable|string|max:50',
            'duu' => 'nullable|string|max:50',
            'au' => 'nullable|string|max:50',
            'prix' => 'nullable|string|max:50',
            'total' => 'nullable|string|max:50',
        ]);

        Imprimefactures::create($request->all());

        return redirect()->route('imprimefactures.index')->with('success', 'Imprimefacture created successfully.');
    }

    public function show(Imprimefactures $imprimefacture)
    {
        return view('imprimefactures.show', compact('imprimefacture'));
    }

    public function edit(Imprimefactures $Imprimefactures)
    {
        return view('Imprimefacturess.edit', compact('imprimefacture'));
    }

    public function update(Request $request, Imprimefactures $imprimefacture)
    {
        $request->validate([
            'vehicule' => 'nullable|string|max:50',
            'matricule' => 'nullable|string|max:50',
            'jours' => 'nullable|string|max:50',
            'duu' => 'nullable|string|max:50',
            'au' => 'nullable|string|max:50',
            'prix' => 'nullable|string|max:50',
            'total' => 'nullable|string|max:50',
        ]);

        $imprimefacture->update($request->all());

        return redirect()->route('imprimefactures.index')->with('success', 'Imprimefacture updated successfully.');
    }

    public function destroy(Imprimefactures $imprimefacture)
    {
        $imprimefacture->delete();

        return redirect()->route('imprimefactures.index')->with('success', 'Imprimefacture deleted successfully.');
    }
}
