<?php

namespace App\Http\Controllers;

use App\Models\Nouvellevoitures;
use App\Models\Visitetechniques;
use Illuminate\Http\Request;

class VisitetechniquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitetechniques = Visitetechniques::all();
        return view('visitetechniques.index', compact('visitetechniques'));
    }

    public function create()
    {
        $nouvellevehicules= Nouvellevoitures::all();
        return view('visitetechniques.create',compact('nouvellevehicules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'centre' => 'required|string|max:100',
            'identicontrol' => 'nullable|string|max:50',
            'nauturisation' => 'nullable|string|max:50',
            'datevisite' => 'required|date',
            'duree' => 'required|integer',
            'datefin' => 'required|date',
            'prix' => 'required|numeric',
            'contact' => 'nullable|string|max:50',
            'observation' => 'nullable|string|max:100',
            'matricule' => 'required|string|max:50',
            'module' => 'nullable|string|max:50',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'visitetechniquepic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'etat' => 'nullable|string|max:50',
            'matricule_id' => 'required|exists:nouvellevoitures,id',
        ]);
      
        $visiteTechniqueData = $request->all();

        if ($request->hasFile('pj')) {
            $visiteTechniqueData['pj'] = $request->file('pj')->store('images');
        }
    
        if ($request->hasFile('visitetechniquepic')) {
            $visiteTechniqueData['visitetechniquepic'] = $request->file('visitetechniquepic')->store('images');
        }

        Visitetechniques::create($request->all());

        return redirect()->route('visitetechniques.index')->with('success', 'VisiteTechnique created successfully.');
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
        $visiteTechnique = Visitetechniques::findOrFail($id);
    
        return view('visitetechniques.edit', compact('visiteTechnique'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'centre' => 'required|string|max:100',
            'identicontrol' => 'nullable|string|max:50',
            'nauturisation' => 'nullable|string|max:50',
            'datevisite' => 'required|date',
            'duree' => 'required|integer',
            'datefin' => 'required|date',
            'prix' => 'required|numeric',
            'contact' => 'nullable|string|max:50',
            'observation' => 'nullable|string|max:100',
            'matricule' => 'required|string|max:50',
            'module' => 'nullable|string|max:50',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'visitetechniquepic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'etat' => 'nullable|string|max:50',
            'matricule_id' => 'required|exists:nouvellevoitures,id',
        ]);
      
    
        $visiteTechnique = Visitetechniques::findOrFail($id);
        $visiteTechniqueData = $request->all();
    
        $visiteTechniqueData = $request->all();

    if ($request->hasFile('pj')) {
        $visiteTechniqueData['pj'] = $request->file('pj')->store('images');
    }

    if ($request->hasFile('visitetechniquepic')) {
        $visiteTechniqueData['visitetechniquepic'] = $request->file('visitetechniquepic')->store('images');
    }
    
    
        $visiteTechnique->update($visiteTechniqueData);
    
        return redirect()->route('visitetechniques.index')->with('success', 'VisiteTechnique updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $visiteTechnique = Visitetechniques::findOrFail($id);
        $visiteTechnique->delete();
    
        return redirect()->route('visitetechniques.index')->with('success', 'Visite Technique deleted successfully');
    }
    
}
