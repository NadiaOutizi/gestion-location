<?php

namespace App\Http\Controllers;

use App\Models\TypeInterventions;
use Illuminate\Http\Request;

class TypeInterventionsController extends Controller
{
    public function index(Request $request)
    {
        $query = TypeInterventions::query();
    
        // Check if the searchType parameter is present in the request
        if ($request->has('searchType')) {
            $query->where('type', 'like', '%' . $request->input('searchType') . '%');
        }
    
        $typeinterventions = $query->get();
    
        return view('typeinterventions.index', compact('typeinterventions'));
    }
    

    public function create()
    {
        return view('typeinterventions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:50',
            'altkm' => 'required|string|max:50',
            'artdate' => 'required|string|max:50',
        ]);

        TypeInterventions::create($request->all());

        return redirect()->route('typeinterventions.index')->with('success', 'TypeIntervention created successfully.');
    }

    public function show(TypeInterventions $typeintervention)
    {
        return view('typeinterventions.show', compact('typeintervention'));
    }

    public function edit(TypeInterventions $typeintervention)
    {
        return view('typeinterventions.edit', compact('typeintervention'));
    }

    public function update(Request $request, TypeInterventions $typeintervention)
    {
        $request->validate([
            'type' => 'required|string|max:50',
            'altkm' => 'required|string|max:50',
            'artdate' => 'required|string|max:50',
        ]);

        $typeintervention->update($request->all());

        return redirect()->route('typeinterventions.index')->with('success', 'TypeIntervention updated successfully.');
    }

    public function destroy(TypeInterventions $typeintervention)
    {
        $typeintervention->delete();

        return redirect()->route('typeinterventions.index')->with('success', 'TypeIntervention deleted successfully.');
    }
}
