<?php

namespace App\Http\Controllers;

use App\Models\Contrats;
use App\Models\Factures;
use App\Models\Reglements;
use Illuminate\Http\Request;

class ReglementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reglements = Reglements::all();
        return view('reglements.index', compact('reglements'));
    }
    // In your controller

    public function create(Request $request)
    {
        $numeroreglemnt = Reglements::generateReglementNumber();

        // Fetch existing contract numbers
        $contractNumbers = Contrats::pluck('numcontrat')->toArray();

        // Fetch existing facture numbers
        $factureNumbers = Factures::pluck('numerofacture')->toArray();
    
        // $data = json_decode($request->getContent(), true);
        $data = json_decode($request->getContent());
        $regler = $data->regler ?? null;
        $number = $data->number ?? null;
    

        $client = "";

        // Fetch client based on 'Regler', 'numerocontrat', or 'numerofacture'
        if ($regler == 'Contrat') {
            $contract = Contrats::where('numcontrat', $number)->first();
            $client = $contract ? $contract->client : '';
        } elseif ($regler == 'Facture') {
            $facture = Factures::where('numerofacture', $number)->first();
            $client = $facture ? $facture->client : '';
        }

        // Check if the request is an AJAX request
        if ($request->ajax()) {
            // Return JSON response for AJAX requests
            return response()->json(['client' => $client, 'regler' => $regler]);
        }
        

        // For non-AJAX requests, return the view as usual
        return view('reglements.create', compact('client', 'numeroreglemnt', 'contractNumbers', 'factureNumbers'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'numeroreglemnt' => 'required|string|max:50',
            'dateregelement' => 'required|string|max:50',
            'Regler' => 'required|string|max:50',
            'client' => 'required|string|max:50',
            'montantrest' => 'required|string|max:50',
            'typepaiement' => 'required|string|max:50',
            'Reglee' => 'required|string|max:50',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Determine the dynamic field name based on the selected value of "Regler"
        $dynamicField = ($request->input('Regler') === 'Contrat') ? 'numerocontrat' : 'numerofacture';

        // Validate and store the dynamic field
        $request->validate([
            $dynamicField => 'required|string|max:50',
        ]);

        // Create a new Reglement instance
        $reglement = new Reglements([
            'numeroreglemnt' => $request->input('numeroreglemnt'),
            'dateregelement' => $request->input('dateregelement'),
            'Regler' => $request->input('Regler'),
            'Regelement' => $request->input($dynamicField), // Use the dynamic field here
            'client' => $request->input('client'),
            'montantrest' => $request->input('montantrest'),
            'typepaiement' => $request->input('typepaiement'),
            'Reglee' => $request->input('Reglee'),
        ]);

        // Handle file upload
        if ($request->hasFile('pj')) {
            $pjPath = $request->file('pj')->store('reglement_pjs');
            $reglement->pj = $pjPath;
        }

        // Save the Reglement
        $reglement->save();

        // Redirect to the index page with a success message
        return redirect()->route('reglements.index')->with('success', 'Reglement created successfully');
    }



    public function show(Reglements $reglement)
    {
        return view('reglements.show', compact('reglement'));
    }

    public function edit(Reglements $reglement ,Request $request)
    {
        $numeroreglemnt = Reglements::generateReglementNumber();

        // Fetch existing contract numbers
        $contractNumbers = Contrats::pluck('numcontrat')->toArray();

        // Fetch existing facture numbers
        $factureNumbers = Factures::pluck('numerofacture')->toArray();
             // $data = json_decode($request->getContent(), true);
             $data = json_decode($request->getContent());
             $regler = $data->regler ?? null;
             $number = $data->number ?? null;
         
     
             $client = "";
     
             // Fetch client based on 'Regler', 'numerocontrat', or 'numerofacture'
             if ($regler == 'Contrat') {
                 $contract = Contrats::where('numcontrat', $number)->first();
                 $client = $contract ? $contract->client : '';
             } elseif ($regler == 'Facture') {
                 $facture = Factures::where('numerofacture', $number)->first();
                 $client = $facture ? $facture->client : '';
             }
     
             // Check if the request is an AJAX request
             if ($request->ajax()) {
                 // Return JSON response for AJAX requests
                 return response()->json(['client' => $client, 'regler' => $regler]);
             }
        return view('reglements.edit', compact('client','numeroreglemnt', 'contractNumbers', 'factureNumbers', 'reglement'));
    }
    public function update(Request $request, Reglements $reglement)
    {
        $request->validate([
            'numeroreglemnt' => 'required|string|max:50',
            'dateregelement' => 'required|string|max:50',
            'Regler' => 'required|string|max:50',
            'client' => 'required|string|max:50',
            'montantrest' => 'required|string|max:50',
            'typepaiement' => 'required|string|max:50',
            'Reglee' => 'required|string|max:50',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Determine the dynamic field name based on the selected value of "Regler"
        $dynamicField = ($request->input('Regler') === 'Contrat') ? 'numerocontrat' : 'numerofacture';

        // Validate and update the dynamic field
        $request->validate([
            $dynamicField => 'required|string|max:50',
        ]);

        $reglement->update([
            'numeroreglemnt' => $request->input('numeroreglemnt'),
            'dateregelement' => $request->input('dateregelement'),
            'Regler' => $request->input('Regler'),
            'Regelement' => $request->input($dynamicField), // Use the dynamic field here
            'client' => $request->input('client'),
            'montantrest' => $request->input('montantrest'),
            'typepaiement' => $request->input('typepaiement'),
            'Reglee' => $request->input('Reglee'),
        ]);

        // Handle file upload
        if ($request->hasFile('pj')) {
            $pjPath = $request->file('pj')->store('reglement_pjs');
            $reglement->pj = $pjPath;
        }

        // Save the updated Reglement
        $reglement->save();

        // Redirect to the index page with a success message
        return redirect()->route('reglements.index')->with('success', 'Reglement updated successfully');
    }


    public function destroy(Reglements $reglement)
    {
        $reglement->delete();

        return redirect()->route('reglements.index')->with('success', 'Reglement deleted successfully');
    }
}
