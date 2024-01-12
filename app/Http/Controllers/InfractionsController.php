<?php

namespace App\Http\Controllers;
use App\Models\Infractions;
use Illuminate\Http\Request;

class InfractionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infractions = Infractions::all();
        return view('infractions.index', compact('infractions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('infractions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numeroinfra' => 'required|string|max:50',
            'matricule' => 'nullable|string|max:50',
            'vehicule' => 'nullable|string|max:50',
            'dateinfraction' => 'nullable|date',
            'heure' => 'nullable|string|max:50',
            'min' => 'nullable|string|max:50',
            'faita' => 'nullable|string|max:50',
            'faitele' => 'nullable|date',
            'client' => 'nullable|string|max:50',
            'numerodossier' => 'nullable|string|max:50',
            'cin' => 'nullable|string|max:50',
            'permi' => 'nullable|string|max:50',
            'passport' => 'nullable|string|max:50',
            'adresse' => 'nullable|string|max:100',
            'telephone' => 'nullable|string|max:50',
            'gsm2' => 'nullable|string|max:50',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed image types and maximum size
        ]);

        $input = $request->all();

        // Handle image upload
        if ($request->hasFile('pj')) {
            $image = $request->file('pj');
            $imageBinary = file_get_contents($image->getRealPath());
            $input['pj'] = $imageBinary;
        }

        Infractions::create($input);

        return redirect()->route('infraction.index')
            ->with('success', 'Infraction created successfully.');
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
        $infraction = Infractions::findOrFail($id);
        return view('infractions.edit', compact('infraction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'numeroinfra' => 'required|string|max:50',
            'matricule' => 'nullable|string|max:50',
            'vehicule' => 'nullable|string|max:50',
            'dateinfraction' => 'nullable|date',
            'heure' => 'nullable|string|max:50',
            'min' => 'nullable|string|max:50',
            'faita' => 'nullable|string|max:50',
            'faitele' => 'nullable|date',
            'client' => 'nullable|string|max:50',
            'numerodossier' => 'nullable|string|max:50',
            'cin' => 'nullable|string|max:50',
            'permi' => 'nullable|string|max:50',
            'passport' => 'nullable|string|max:50',
            'adresse' => 'nullable|string|max:100',
            'telephone' => 'nullable|string|max:50',
            'gsm2' => 'nullable|string|max:50',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $infraction = Infractions::findOrFail($id);

        $input = $request->all();

        // Handle image upload
        if ($request->hasFile('pj')) {
            $image = $request->file('pj');
            $imageBinary = file_get_contents($image->getRealPath());
            $input['pj'] = $imageBinary;
        }

        $infraction->update($input);

        return redirect()->route('infraction.index')
            ->with('success', 'Infraction updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Infractions::findOrFail($id);
        $client->delete();

        return redirect()->back()->with('success', 'Client deleted successfully.');
    }
}
