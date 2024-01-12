<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agences;

class AgencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agences = Agences::all();
        return view('agences.index', compact('agences'));
    }

 
    public function create()
    {
        // Access the authenticated user
        // dd((new User())->checkIfUserHasAgency());
        $user = Auth::user();

        if ($user->checkIfUserHasAgency()) {
            return redirect()->route('agences.show', $user->agence);
        }

        return view('agences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Agence' => 'required|string|max:80',
            'Adresse' => 'required|string',
            'Ville' => 'nullable|string|max:80',
            'CodeP' => 'nullable|string|max:80',
            'GSM' => 'required|string|max:80',
            'gms' => 'nullable|string|max:80',
            'telefix' => 'nullable|string|max:80',
            'fax' => 'nullable|string|max:80',
            'Email' => 'nullable|string|max:80|email',
            'Nomfran' => 'nullable|string|max:80',
            'prenomFrance' => 'nullable|string|max:80',
            'cine' => 'nullable|string|max:50',
            'telephone' => 'nullable|string|max:50',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'patent' => 'required|string|max:50',
            'rc' => 'nullable|string|max:50',
            'iff' => 'nullable|string|max:50',
            'ice' => 'nullable|string|max:50',
            'cnss' => 'nullable|string|max:50',
            'condition' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Bancaire' => 'nullable|string|max:200',
        ]);

    
         // Check if the authenticated user already has an associated agency
    if (Auth::user()->checkIfUserHasAgency()) {
        return redirect()->route('agences.show', Auth::user()->agence)->with('warning', 'You already have an associated agency.');
    }

    // Create a new agency instance
    $agence = new Agences($request->all());

    // Handle file uploads for 'logo' and 'condition' fields
    if ($request->hasFile('logo')) {
        $agence->logo = $request->file('logo')->store('images');
    }

    if ($request->hasFile('condition')) {
        $agence->condition = $request->file('condition')->store('images');
    }

    // Save the agency
    $agence->save();

    // Associate the agency with the authenticated user

    Auth::user()->agence()->associate($agence);
    Auth::user()->save();

    return redirect()->route('agences.show', $agence)->with('success', 'Agence created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agences $agence)
    {
        return view('agences.show', compact('agence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agence = Agences::findOrFail($id);
        return view('agences.edit', compact('agence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $agence = Agences::findOrFail($id);

        $request->validate([
            'Agence' => 'required|string|max:80',
            'Adresse' => 'required|string',
            'Ville' => 'nullable|string|max:80',
            'CodeP' => 'nullable|string|max:80',
            'GSM' => 'required|string|max:80',
            'gms' => 'nullable|string|max:80',
            'telefix' => 'nullable|string|max:80',
            'fax' => 'nullable|string|max:80',
            'Email' => 'nullable|string|max:80|email',
            'Nomfran' => 'nullable|string|max:80',
            'prenomFrance' => 'nullable|string|max:80',
            'cine' => 'nullable|string|max:50',
            'telephone' => 'nullable|string|max:50',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'patent' => 'required|string|max:50',
            'rc' => 'nullable|string|max:50',
            'iff' => 'nullable|string|max:50',
            'ice' => 'nullable|string|max:50',
            'cnss' => 'nullable|string|max:50',
            'condition' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Bancaire' => 'nullable|string|max:200',
        ]);

        $agence->fill($request->all());

        // Handle file updates for 'logo' and 'condition' fields
        if ($request->hasFile('logo')) {
            $agence->logo = $request->file('logo')->store('images');
        }
    
        if ($request->hasFile('condition')) {
            $agence->condition = $request->file('condition')->store('images');
        }

        $agence->save();

        return redirect()->route('agences.index')->with('success', 'Agence updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $agence = Agences::findOrFail($id);
        $agence->delete();

        return redirect()->route('agences.index')->with('success', 'Agence deleted successfully.');
    }

}
