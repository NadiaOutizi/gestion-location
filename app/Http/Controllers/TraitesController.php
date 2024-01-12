<?php

namespace App\Http\Controllers;

use App\Models\Traites;
use Illuminate\Http\Request;

class TraitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $traites = Traites::all();
        return view('traites.index', compact('traites'));
    }

    public function create()
    {
        return view('traites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'nullable|string|max:50',
            'datetrait' => 'nullable|date',
            'observation' => 'nullable|string|max:50',
            'montant' => 'nullable|numeric',
        ]);

        $traite = new Traites();
        $traite->matricule = $request->input('matricule');
        $traite->datetrait = $request->input('datetrait');
        $traite->observation = $request->input('observation');
        $traite->montant = $request->input('montant');
        $traite->save();

        return redirect()->route('traites.index')->with('success', 'Traite created successfully');
    }

    public function edit($id)
    {
        $traite = Traites::findOrFail($id);
        return view('traites.edit', compact('traite'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'matricule' => 'nullable|string|max:50',
            'datetrait' => 'nullable|date',
            'observation' => 'nullable|string|max:50',
            'montant' => 'nullable|numeric',
        ]);

        $traite = Traites::findOrFail($id);
        $traite->matricule = $request->input('matricule');
        $traite->datetrait = $request->input('datetrait');
        $traite->observation = $request->input('observation');
        $traite->montant = $request->input('montant');
        $traite->save();

        return redirect()->route('traites.index')->with('success', 'Traite updated successfully');
    }

    public function destroy($id)
    {
        $traite = Traites::findOrFail($id);
        $traite->delete();

        return redirect()->route('traites.index')->with('success', 'Traite deleted successfully');
    }
}
