<?php

namespace App\Http\Controllers;

use App\Models\ListeMarques;
use App\Models\Listemodules;
use Illuminate\Http\Request;

class ListeModuleController extends Controller
{
    public function index()
    {
        $listemodules = Listemodules::all();
        return view('listemodules.index', compact('listemodules'));
    }

    public function create()
    {
        $listemarques = ListeMarques::all();
        return view('listemodules.create', compact('listemarques'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modulenom' => 'required|string|max:50',
            'category' => 'nullable|string|max:50',
            'marque_id' => 'required|exists:listemarques,id',
        ]);

        ListeModules::create($request->all());

        return redirect()->route('listemodules.index')->with('success', 'ListeModule created successfully.');
    }

    public function show(ListeModules $listemodule)
    {
        return view('listemodules.show', compact('listemodule'));
    }

    public function edit(ListeModules $listemodule)
    {
        $listemarques = ListeMarques::all();
        return view('listemodules.edit', compact('listemodule', 'listemarques'));
    }

    public function update(Request $request, ListeModules $listemodule)
    {
        $request->validate([
            'modulenom' => 'required|string|max:50',
            'category' => 'nullable|string|max:50',
            'marque_id' => 'required|exists:listemarques,id',
        ]);

        $listemodule->update($request->all());

        return redirect()->route('listemodules.index')->with('success', 'ListeModule updated successfully.');
    }

    public function destroy(ListeModules $listemodule)
    {
        $listemodule->delete();

        return redirect()->route('listemodules.index')->with('success', 'ListeModule deleted successfully.');
    }
}
