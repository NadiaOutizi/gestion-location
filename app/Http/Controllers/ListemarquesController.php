<?php

namespace App\Http\Controllers;

use App\Models\Listemarques;
use Illuminate\Http\Request;

class ListemarquesController extends Controller
{
    /**
     * Display a listing of the resource.
      */
      public function index()
      {
          $listemarques = ListeMarques::all();
          return view('listemarques.index', compact('listemarques'));
      }
  
      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('listemarques.create');
      }
  
      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
          $request->validate([
              'marquenom' => 'required|string|max:80',
          ]);
  
          ListeMarques::create($request->all());
  
          return redirect()->route('listemarques.index')->with('success', 'ListeMarque created successfully.');
      }
  
      /**
       * Display the specified resource.
       *
       * @param  \App\Models\ListeMarque  $listemarque
       * @return \Illuminate\Http\Response
       */
      public function show(ListeMarques $listemarque)
      {
          return view('listemarques.show', compact('listemarque'));
      }
  
      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Models\ListeMarque  $listemarque
       * @return \Illuminate\Http\Response
       */
      public function edit(ListeMarques $listemarque)
      {
          return view('listemarques.edit', compact('listemarque'));
      }
  
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Models\ListeMarque  $listemarque
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, Listemarques $listemarque)
      {
          $request->validate([
              'marquenom' => 'required|string|max:80',
          ]);
  
          $listemarque->update($request->all());
  
          return redirect()->route('listemarques.index')->with('success', 'ListeMarque updated successfully.');
      }
  
      /**
       * Remove the specified resource from storage.
       *
       * @param  \App\Models\ListeMarque  $listemarque
       * @return \Illuminate\Http\Response
       */
      public function destroy(Listemarques $listemarque)
      {
          $listemarque->delete();
  
          return redirect()->route('listemarques.index')->with('success', 'ListeMarque deleted successfully.');
      }
}
