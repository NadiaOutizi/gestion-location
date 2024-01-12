<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::paginate(10);
        return view('clients.index', compact('clients'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client = new Clients();
        return view('clients.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cin' => 'required|string|max:50|unique:clients',
            'civilite' => 'nullable|string|max:50',
            'nationalite' => 'nullable|string|max:50',
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'permi' => 'required|string|max:50',
            'passeport' => 'nullable|string|max:50',
            'adresse' => 'required|string',
            'ville' => 'nullable|string|max:50',
            'codepostal' => 'nullable|string|max:50',
            'tele' => 'required|string|max:50',
            'telephone' => 'nullable|string|max:50',
            'email' => 'nullable|email|string|max:50',
            'remarque' => 'nullable|string',
            'datecin' => 'required|string|max:50',
            'datepermi' => 'required|string|max:50',
            'datepassport' => 'nullable|string|max:50',
            'rectocin' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'versocin' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rectopermi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'versopermi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rectopassport' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'versopassport' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'listenoir' => 'nullable|string|max:50',
            'delivrecin' => 'nullable|string|max:50',
            'delivrepermi' => 'nullable|string|max:50',
            'delivrepassporte' => 'nullable|string|max:50',
            'doit' => 'nullable|string|max:50',
            'ice' => 'nullable|string|max:50',
            'typeclient' => 'nullable|string|max:50',
            'numerodoss' => 'nullable|string|max:50',
        ]);
    
        $client = new Clients();
        $client->fill($request->all());
    
        // Handle image uploads
        if ($request->hasFile('rectocin')) {
            $client->rectocin = $request->file('rectocin')->store('images');
        }
    
        if ($request->hasFile('versocin')) {
            $client->versocin = $request->file('versocin')->store('images');
        }
    
        if ($request->hasFile('rectopermi')) {
            $client->rectopermi = $request->file('rectopermi')->store('images');
        }
    
        if ($request->hasFile('versopermi')) {
            $client->versopermi = $request->file('versopermi')->store('images');
        }
    
        if ($request->hasFile('rectopassport')) {
            $client->rectopassport = $request->file('rectopassport')->store('images');
        }
    
        if ($request->hasFile('versopassport')) {
            $client->versopassport = $request->file('versopassport')->store('images');
        }
    
        $client->save();
    
        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cin' => 'required|string|max:50',
            'civilite' => 'nullable|string|max:50',
            'nationalite' => 'nullable|string|max:50',
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'permi' => 'required|string|max:50',
            'passeport' => 'nullable|string|max:50',
            'adresse' => 'nullable|string',
            'ville' => 'nullable|string|max:50',
            'codepostal' => 'nullable|string|max:50',
            'tele' => 'required|string|max:50',
            'telephone' => 'nullable|string|max:50',
            'email' => 'nullable|email|string|max:50',
            'remarque' => 'nullable|string',
            'datecin' => 'required|string|max:50',
            'datepermi' => 'required|string|max:50',
            'datepassport' => 'nullable|string|max:50',
            'rectocin' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'versocin' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rectopermi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'versopermi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rectopassport' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'versopassport' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'listenoir' => 'nullable|string|max:50',
            'delivrecin' => 'nullable|string|max:50',
            'delivrepermi' => 'nullable|string|max:50',
            'delivrepassporte' => 'nullable|string|max:50',
            'doit' => 'nullable|string|max:50',
            'ice' => 'nullable|string|max:50',
            'typeclient' => 'nullable|string|max:50',
            'numerodoss' => 'nullable|string|max:50',
        ]);
    
        $client = Clients::findOrFail($id);
        $client->fill($request->all());
    
        // Handle image updates
        if ($request->hasFile('rectocin')) {
            $client->rectocin = $request->file('rectocin')->store('images');
        }
    
        if ($request->hasFile('versocin')) {
            $client->versocin = $request->file('versocin')->store('images');
        }
    
        if ($request->hasFile('rectopermi')) {
            $client->rectopermi = $request->file('rectopermi')->store('images');
        }
    
        if ($request->hasFile('versopermi')) {
            $client->versopermi = $request->file('versopermi')->store('images');
        }
    
        if ($request->hasFile('rectopassport')) {
            $client->rectopassport = $request->file('rectopassport')->store('images');
        }
    
        if ($request->hasFile('versopassport')) {
            $client->versopassport = $request->file('versopassport')->store('images');
        }
    
        $client->save();
    
        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Clients::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
    public function chercher(Request $request)
    {
        $query = $request->input('query');
    
        $clients = Clients::where('nom', 'LIKE', "%$query%")
                        ->orWhere('prenom', 'LIKE', "%$query%")
                        ->orWhere('cin', 'LIKE', "%$query%")
                        ->orWhere('tele', 'LIKE', "%$query%")
                        ->paginate(5);
    
        return view('clients.index', compact('clients'));
    }
    
}
