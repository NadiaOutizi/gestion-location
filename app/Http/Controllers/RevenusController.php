<?php

namespace App\Http\Controllers;

use App\Models\Revenus;
use Illuminate\Http\Request;

class RevenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $revenus = Revenus::all();
        return view('revenus.index', compact('revenus'));
    }

    public function create()
    {
        return view('revenus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Motif' => 'required|string|max:500',
            'datecharge' => 'nullable|date',
            'montant' => 'nullable|numeric',
            'observation' => 'nullable|string',
            'pj' => 'nullable|file|mimes:pdf,doc,docx|max:2048', 
        ]);

        $revenu = new Revenus();
        $revenu->Motif = $request->Motif;
        $revenu->datecharge = $request->datecharge;
        $revenu->montant = $request->montant;
        $revenu->observation = $request->observation;

        if ($request->hasFile('pj')) {
            $revenu->pj = $request->file('pj')->store('images');
        }


        $revenu->save();

        return redirect()->route('revenus.index')->with('success', 'Revenu created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $revenu = Revenus::findOrFail($id);
        return view('revenus.edit', compact('revenu'));
    }

    public function update(Request $request, $id)
    {
        $revenu = Revenus::findOrFail($id);

        $request->validate([
            'Motif' => 'required|string|max:500',
            'datecharge' => 'nullable|date',
            'montant' => 'nullable|numeric',
            'observation' => 'nullable|string',
            'pj' => 'nullable|file|mimes:pdf,doc,docx|max:2048', 
        ]);

        $revenu->Motif = $request->Motif;
        $revenu->datecharge = $request->datecharge;
        $revenu->montant = $request->montant;
        $revenu->observation = $request->observation;

        if ($request->hasFile('pj')) {
            $revenu->pj = $request->file('pj')->store('images');
        }

        $revenu->save();

        return redirect()->route('revenus.index')->with('success', 'Revenu updated successfully');
    }

    public function show($id)
    {
        $revenu = Revenus::findOrFail($id);
        return view('revenus.show', compact('revenu'));
    }

    public function destroy($id)
    {
        $revenu = Revenus::findOrFail($id);
        $revenu->delete();

        return redirect()->route('revenus.index')->with('success', 'Revenu deleted successfully');
    }
}