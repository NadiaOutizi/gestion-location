<?php

namespace App\Http\Controllers;

use App\Models\Agences;
use App\Models\Clients;
use App\Models\Contrats;
use Illuminate\Http\Request;
use App\Models\Nouvellevoitures;

class ContratsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contrats = Contrats::all();
        return view('contrats.index', compact('contrats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Clients::all();
        $voitures = Nouvellevoitures::all();
        $agence = Agences::first();
    
        // Get the latest contract number
        $latestContrat = Contrats::latest()->first();
        $nextContractNumber = $latestContrat ? (int)$latestContrat->numcontrat + 1 : 1;
    
        return view('contrats.create', compact('clients', 'voitures', 'agence', 'nextContractNumber'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'numcontrat' => 'required|string|max:50',
            'datecontrat' => 'nullable|date',
            'client' => 'nullable|string|max:100',
            'cin' => 'nullable|string|max:50',
            'valcin' => 'nullable|string|max:50',
            'permi' => 'nullable|string|max:50',
            'valpermi' => 'nullable|string|max:50',
            'du' => 'nullable|date',
            'au' => 'nullable|date',
            'jours' => 'nullable|string|max:50',
            'lieulivr' => 'nullable|string|max:50',
            'lieurecu' => 'nullable|string|max:50',
            'lieucontrat'=>'nullable|string|max:50',
            'matricule' => 'nullable|string|max:50',
            'vehicule' => 'nullable|string|max:50',
            'prix' => 'nullable|string|max:50',
            'kmdepart' => 'nullable|string|max:50',
            'carbu' => 'nullable|string|max:50',
            'typecarbu' => 'nullable|string|max:50',
            'typepayment' => 'nullable|string|max:50',
            'garentie' => 'nullable|string|max:50',
            'montant' => 'nullable|string|max:50',
            'etat' => 'nullable|string|max:50',
            'cliente' => 'nullable|string|max:50',
            'cinvale' => 'nullable|string|max:50',
            'permiee' => 'nullable|string|max:50',
            'permieeval' => 'nullable|string|max:50',
            'cincondu' => 'nullable|string|max:50',
            'equipement' => 'nullable|string|max:50',
            'DCIN' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpermi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpasspor' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'adresse' => 'nullable|string|max:200',
            'telephone' => 'nullable|string|max:200',
            'passport' => 'nullable|string|max:200',
            'valpass' => 'nullable|string|max:50',
            'DCINe' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpermie' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpasspore' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'adressee' => 'nullable|string|max:200',
            'telephonee' => 'nullable|string|max:200',
            'passporte' => 'nullable|string|max:200',
            'valpasse' => 'nullable|string|max:50',
            'heure' => 'nullable|string|max:50',
            'min' => 'nullable|string|max:50',
            'sousloa' => 'nullable|string|max:100',
            'matriculesous' => 'nullable|string|max:50',
            'Souslocaetat' => 'nullable|string|max:50',
            'datehm' => 'nullable|string|max:50',
            'av' => 'nullable|string|max:50',
            'client_id' => 'required|exists:clients,id',
            'matricule_id' => 'required|exists:nouvellevoitures,id',
        ]);
        
        // Create a new Contrat instance
        $contrat = new Contrats;
    
        // Assign values from the request to the model's attributes
        $contrat->numcontrat = $request->input('numcontrat');
        $contrat->datecontrat = $request->input('datecontrat');
        $contrat->client = $request->input('client');
        $contrat->cin = $request->input('cin');
        $contrat->valcin = $request->input('valcin');
        $contrat->permi = $request->input('permi');
        $contrat->valpermi = $request->input('valpermi');
        $contrat->du = $request->input('du');
        $contrat->au = $request->input('au');
        $contrat->jours = $request->input('jours');
        $contrat->lieulivr = $request->input('lieulivr');
        $contrat->lieurecu = $request->input('lieurecu');
        $contrat->lieucontrat = $request->input('lieucontrat');
        $contrat->matricule = $request->input('matricule');
        $contrat->vehicule = $request->input('vehicule');
        $contrat->prix = $request->input('prix');
        $contrat->kmdepart = $request->input('kmdepart');
        $contrat->carbu = $request->input('carbu');
        $contrat->typecarbu = $request->input('typecarbu');
        $contrat->typepayment = $request->input('typepayment');
        $contrat->garentie = $request->input('garentie');
        $contrat->montant = $request->input('montant');
        $contrat->etat = $request->input('etat');
        $contrat->cliente = $request->input('cliente');
        $contrat->cinvale = $request->input('cinvale');
        $contrat->permiee = $request->input('permiee');
        $contrat->permieeval = $request->input('permieeval');
        $contrat->cincondu = $request->input('cincondu');
        $contrat->equipement = $request->input('equipement');
        $contrat->adresse = $request->input('adresse');
        $contrat->telephone = $request->input('telephone');
        $contrat->passport = $request->input('passport');
        $contrat->valpass = $request->input('valpass');
        $contrat->DCINe = $request->hasFile('DCINe') ? file_get_contents($request->file('DCINe')->getRealPath()) : $contrat->DCINe;
        $contrat->dpermie = $request->hasFile('dpermie') ? file_get_contents($request->file('dpermie')->getRealPath()) : $contrat->dpermie;
        $contrat->dpasspore = $request->hasFile('dpasspore') ? file_get_contents($request->file('dpasspore')->getRealPath()) : $contrat->dpasspore;
        $contrat->adressee = $request->input('adressee');
        $contrat->telephonee = $request->input('telephonee');
        $contrat->passporte = $request->input('passporte');
        $contrat->valpasse = $request->input('valpasse');
        $contrat->heure = $request->input('heure');
        $contrat->min = $request->input('min');
        $contrat->sousloa = $request->input('sousloa');
        $contrat->matriculesous = $request->input('matriculesous');
        $contrat->Souslocaetat = $request->input('Souslocaetat');
        $contrat->datehm = $request->input('datehm');
        $contrat->av = $request->input('av');
        $contrat->client_id = $request->input('client_id');
        $contrat->matricule_id = $request->input('matricule_id');
    

    
        // Handle image uploads and store binary data in the database
        if ($request->hasFile('DCIN')) {
            $contrat->DCIN = file_get_contents($request->file('DCIN')->getRealPath());
        }
    
        if ($request->hasFile('dpermi')) {
            $contrat->dpermi = file_get_contents($request->file('dpermi')->getRealPath());
        }
    
        if ($request->hasFile('dpasspor')) {
            $contrat->dpasspor = file_get_contents($request->file('dpasspor')->getRealPath());
        }
        $contrat->save();
        return redirect()->route('contrats.index')->with('success', 'Contrat created successfully');
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
        $contrat = Contrats::findOrFail($id);
        return view('contrats.edit', compact('contrat'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'numcontrat' => 'required|string|max:50',
            'datecontrat' => 'nullable|date',
            'client' => 'nullable|string|max:100',
            'cin' => 'nullable|string|max:50',
            'valcin' => 'nullable|string|max:50',
            'permi' => 'nullable|string|max:50',
            'valpermi' => 'nullable|string|max:50',
            'du' => 'nullable|date',
            'au' => 'nullable|date',
            'jours' => 'nullable|string|max:50',
            'lieulivr' => 'nullable|string|max:50',
            'lieurecu' => 'nullable|string|max:50',
            'lieucontrat'=>'nullable|string|max:50',
            'matricule' => 'nullable|string|max:50',
            'vehicule' => 'nullable|string|max:50',
            'prix' => 'nullable|string|max:50',
            'kmdepart' => 'nullable|string|max:50',
            'carbu' => 'nullable|string|max:50',
            'typecarbu' => 'nullable|string|max:50',
            'typepayment' => 'nullable|string|max:50',
            'garentie' => 'nullable|string|max:50',
            'montant' => 'nullable|string|max:50',
            'etat' => 'nullable|string|max:50',
            'cliente' => 'nullable|string|max:50',
            'cinvale' => 'nullable|string|max:50',
            'permiee' => 'nullable|string|max:50',
            'permieeval' => 'nullable|string|max:50',
            'cincondu' => 'nullable|string|max:50',
            'equipement' => 'nullable|string|max:50',
            'DCIN' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpermi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpasspor' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'adresse' => 'nullable|string|max:200',
            'telephone' => 'nullable|string|max:200',
            'passport' => 'nullable|string|max:200',
            'valpass' => 'nullable|string|max:50',
            'DCINe' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpermie' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dpasspore' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'adressee' => 'nullable|string|max:200',
            'telephonee' => 'nullable|string|max:200',
            'passporte' => 'nullable|string|max:200',
            'valpasse' => 'nullable|string|max:50',
            'heure' => 'nullable|string|max:50',
            'min' => 'nullable|string|max:50',
            'sousloa' => 'nullable|string|max:100',
            'matriculesous' => 'nullable|string|max:50',
            'Souslocaetat' => 'nullable|string|max:50',
            'datehm' => 'nullable|string|max:50',
            'av' => 'nullable|string|max:50',
            'client_id' => 'required|exists:clients,id',
            'matricule_id' => 'required|exists:nouvellevoitures,id',
        ]);

    // Find the Contrat instance
    $contrat = Contrats::findOrFail($id);

    // Update the Contrat instance with values from the request
    $contrat->numcontrat = $request->input('numcontrat');
    $contrat->datecontrat = $request->input('datecontrat');
    $contrat->client = $request->input('client');
    $contrat->cin = $request->input('cin');
    $contrat->valcin = $request->input('valcin');
    $contrat->permi = $request->input('permi');
    $contrat->valpermi = $request->input('valpermi');
    $contrat->du = $request->input('du');
    $contrat->au = $request->input('au');
    $contrat->jours = $request->input('jours');
    $contrat->lieulivr = $request->input('lieulivr');
    $contrat->lieurecu = $request->input('lieurecu');
    $contrat->lieucontrat = $request->input('lieucontrat');
    $contrat->matricule = $request->input('matricule');
    $contrat->vehicule = $request->input('vehicule');
    $contrat->prix = $request->input('prix');
    $contrat->kmdepart = $request->input('kmdepart');
    $contrat->carbu = $request->input('carbu');
    $contrat->typecarbu = $request->input('typecarbu');
    $contrat->typepayment = $request->input('typepayment');
    $contrat->garentie = $request->input('garentie');
    $contrat->montant = $request->input('montant');
    $contrat->etat = $request->input('etat');
    $contrat->cliente = $request->input('cliente');
    $contrat->cinvale = $request->input('cinvale');
    $contrat->permiee = $request->input('permiee');
    $contrat->permieeval = $request->input('permieeval');
    $contrat->cincondu = $request->input('cincondu');
    $contrat->equipement = $request->input('equipement');
    $contrat->adresse = $request->input('adresse');
    $contrat->telephone = $request->input('telephone');
    $contrat->passport = $request->input('passport');
    $contrat->valpass = $request->input('valpass');
    $contrat->DCINe = $request->hasFile('DCINe') ? file_get_contents($request->file('DCINe')->getRealPath()) : $contrat->DCINe;
    $contrat->dpermie = $request->hasFile('dpermie') ? file_get_contents($request->file('dpermie')->getRealPath()) : $contrat->dpermie;
    $contrat->dpasspore = $request->hasFile('dpasspore') ? file_get_contents($request->file('dpasspore')->getRealPath()) : $contrat->dpasspore;
    $contrat->adressee = $request->input('adressee');
    $contrat->telephonee = $request->input('telephonee');
    $contrat->passporte = $request->input('passporte');
    $contrat->valpasse = $request->input('valpasse');
    $contrat->heure = $request->input('heure');
    $contrat->min = $request->input('min');
    $contrat->sousloa = $request->input('sousloa');
    $contrat->matriculesous = $request->input('matriculesous');
    $contrat->Souslocaetat = $request->input('Souslocaetat');
    $contrat->datehm = $request->input('datehm');
    $contrat->av = $request->input('av');
    $contrat->client_id = $request->input('client_id');
    $contrat->matricule_id = $request->input('matricule_id');
    
    // Handle image uploads and update binary data in the database
    if ($request->hasFile('DCIN')) {
        $contrat->DCIN = file_get_contents($request->file('DCIN')->getRealPath());
    }

    if ($request->hasFile('dpermi')) {
        $contrat->dpermi = file_get_contents($request->file('dpermi')->getRealPath());
    }

    if ($request->hasFile('dpasspor')) {
        $contrat->dpasspor = file_get_contents($request->file('dpasspor')->getRealPath());
    }

    // Save the updated Contrat instance
    $contrat->save();

    // Redirect to the index page or show success message
    return redirect()->route('contrats.index')->with('success', 'Contrat updated successfully');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contrat = Contrats::findOrFail($id);
        $contrat->delete();
        return redirect()->route('contrats.index')->with('success', 'Contrat deleted successfully');
    }
}
