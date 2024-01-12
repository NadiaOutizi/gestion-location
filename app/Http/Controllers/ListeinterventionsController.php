<?php

namespace App\Http\Controllers;

use App\Models\Listeinterventions;
use Illuminate\Http\Request;

class ListeinterventionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listeInterventions = ListeInterventions::all();
        return view('listeinterventions.index', compact('listeInterventions'));
    }

    public function create()
    {
        return view('listeinterventions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'typeinter' => 'required|string|max:100',
            'dateinterve' => 'nullable|date',
            'maticule' => 'nullable|string|max:50',
            'vehicule' => 'nullable|string|max:10',
            'cout' => 'nullable|numeric',
            'kilomactule' => 'nullable|integer',
            'prochenkilo' => 'nullable|integer',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'observatio' => 'nullable|string|max:300',
        ]);

        $listeIntervention = new ListeInterventions([
            'typeinter' => $request->get('typeinter'),
            'dateinterve' => $request->get('dateinterve'),
            'maticule' => $request->get('maticule'),
            'vehicule' => $request->get('vehicule'),
            'cout' => $request->get('cout'),
            'kilomactule' => $request->get('kilomactule'),
            'prochenkilo' => $request->get('prochenkilo'),
            'observatio' => $request->get('observatio'),
        ]);

        if ($request->hasFile('pj')) {
            $listeIntervention->pj = $request->file('pj')->store('images');
        }


        $listeIntervention->save();

        return redirect('/listeinterventions')->with('success', 'ListeIntervention has been added');
    }

    public function edit($id)
    {
        $listeIntervention = ListeInterventions::find($id);
        return view('listeinterventions.edit', compact('listeIntervention'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'typeinter' => 'required|string|max:100',
            'dateinterve' => 'nullable|date',
            'maticule' => 'nullable|string|max:50',
            'vehicule' => 'nullable|string|max:10',
            'cout' => 'nullable|numeric',
            'kilomactule' => 'nullable|integer',
            'prochenkilo' => 'nullable|integer',
            'pj' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'observatio' => 'nullable|string|max:300',
        ]);

        $listeIntervention = Listeinterventions::find($id);
        $listeIntervention->typeinter = $request->get('typeinter');
        $listeIntervention->dateinterve = $request->get('dateinterve');
        $listeIntervention->maticule = $request->get('maticule');
        $listeIntervention->vehicule = $request->get('vehicule');
        $listeIntervention->cout = $request->get('cout');
        $listeIntervention->kilomactule = $request->get('kilomactule');
        $listeIntervention->prochenkilo = $request->get('prochenkilo');
        $listeIntervention->observatio = $request->get('observatio');

      
        if ($request->hasFile('pj')) {
            $listeIntervention->pj = $request->file('pj')->store('images');
        }


        $listeIntervention->save();

        return redirect('/listeinterventions')->with('success', 'ListeIntervention has been updated');
    }

    public function destroy($id)
    {
        $listeIntervention = Listeinterventions::find($id);
        $listeIntervention->delete();

        return redirect('/listeinterventions')->with('success', 'ListeIntervention has been deleted');
    }
    public function specification()
    {
      return view('listeinterventions.specification');
    }
}
