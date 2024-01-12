<?php

namespace App\Http\Controllers;

use App\Models\Assurances;
use App\Models\Nouvellevoitures;
use Illuminate\Http\Request;

class AssurancesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assurances = Assurances::all();
        return view('assurances.index', compact('assurances'));
    }

    public function create()
    {
        $nouvellevoitures = Nouvellevoitures::all();
        return view('assurances.create', compact('nouvellevoitures'));
    }

    /**
     * Store a newly created resource in storage.
     */
 
     public function store(Request $request)
     {
         $request->validate([
             'assurance' => 'required|string|max:50',
             'numeropolice' => 'nullable|string|max:50',
             'Dateoperation' => 'nullable|date',
             'heuredebut' => 'nullable|string|max:50',
             'datedebut' => 'nullable|date',
             'dureemois' => 'nullable|integer',
             'datefin' => 'nullable|date',
             'prix' => 'nullable|numeric',
             'contactass' => 'nullable|string|max:50',
             'observation' => 'nullable|string|max:100',
             'matricule' => 'nullable|string|max:50',
             'modele' => 'nullable|string|max:100',
             'assurancepic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             'pjpic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             'etat' => 'nullable|string|max:50',
             'matricule_id' => 'required|exists:nouvellevoitures,id',
         ]);
 
         $assurance = new Assurances($request->all());
 
         if ($request->hasFile('assurancepic')) {
             $assurance['assurancepic'] = $request->file('assurancepic')->store('assurancepics');
         }
 
         if ($request->hasFile('pjpic')) {
             $assurance['pjpic'] = $request->file('pjpic')->store('pjpics');
         }
 
         $assurance->save();
 
         return redirect()->route('assurances.index')->with('success', 'Assurance created successfully.');
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
        $assurance = Assurances::findOrFail($id);
        $nouvellevoitures = Nouvellevoitures::all();
        return view('assurances.edit', compact('assurance', 'nouvellevoitures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'assurance' => 'required|string|max:50',
            'numeropolice' => 'nullable|string|max:50',
            'Dateoperation' => 'nullable|date',
            'heuredebut' => 'nullable|string|max:50',
            'datedebut' => 'nullable|date',
            'dureemois' => 'nullable|integer',
            'datefin' => 'nullable|date',
            'prix' => 'nullable|numeric',
            'contactass' => 'nullable|string|max:50',
            'observation' => 'nullable|string|max:100',
            'matricule' => 'nullable|string|max:50',
            'modele' => 'nullable|string|max:100',
            'assurancepic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pjpic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'etat' => 'nullable|string|max:50',
            'matricule_id' => 'required|exists:nouvellevoitures,id',
        ]);
            $assurance = Assurances::findOrFail($id);
            $assurance->update($request->all());
        
            if ($request->hasFile('assurancepic')) {
                $assurance['assurancepic'] = $request->file('assurancepic')->store('assurancepics');
            }
        
            if ($request->hasFile('pjpic')) {
                $assurance['pjpic'] = $request->file('pjpic')->store('pjpics');
            }
        
            $assurance->save();
        
            return redirect()->route('assurances.index')->with('success', 'Assurance updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $assurance = Assurances::findOrFail($id);
        $assurance->delete();
    
        return redirect()->route('assurances.index')->with('success', 'Assurance deleted successfully.');
    }
}
