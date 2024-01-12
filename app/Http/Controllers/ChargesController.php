<?php

namespace App\Http\Controllers;

use App\Models\Charges;
use Illuminate\Http\Request;

class ChargesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $charges = Charges::all();
        return view('charges.index', compact('charges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('charges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Motif' => 'required|string|max:500',
            'datechargee' => 'required|date',
            'montant' => 'nullable|numeric',
            'observation' => 'nullable|string',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $charge = new Charges([
            'Motif' => $request->input('Motif'),
            'datechargee' => $request->input('datechargee'),
            'montant' => $request->input('montant'),
            'observation' => $request->input('observation'),
        
        ]);

    
        if ($request->hasFile('pj')) {
            $charge->pj = $request->file('pj')->store('images');
        }

        $charge->save();

        return redirect()->route('charges.index')->with('success', 'Charge created successfully.');
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
        $charge = Charges::findOrFail($id);
        return view('charges.edit', compact('charge'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $charge = Charges::findOrFail($id);

        $request->validate([
            'Motif' => 'required|string|max:500',
            'datechargee' => 'required|date',
            'montant' => 'nullable|numeric',
            'observation' => 'nullable|string',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $charge->Motif = $request->input('Motif');
        $charge->datechargee = $request->input('datechargee');
        $charge->montant = $request->input('montant');
        $charge->observation = $request->input('observation');

        // Handle file update for 'pj' field
      
        if ($request->hasFile('pj')) {
            $charge->pj = $request->file('pj')->store('images');
        }

        $charge->save();

        return redirect()->route('charges.index')->with('success', 'Charge updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $charge = Charges::findOrFail($id);
        $charge->delete();

        return redirect()->route('charges.index')->with('success', 'Charge deleted successfully.');
    }
}
