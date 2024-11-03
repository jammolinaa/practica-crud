<?php

namespace App\Http\Controllers;

use App\Models\Instructores;
use Illuminate\Http\Request;

class InstructoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructores= instructores::all();
        return view('Instructores.index',compact('instructores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructores = new instructores();
        return view('instructores.create', compact('instructores'));
        // return view('instructores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Instructores::create($request->all());

        return redirect()->route('instructores.index')
            ->with('success', 'Instructores created successfully.');     
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

        $instructores = Instructores::find($id);
        return view('Instructores.edit', compact('instructores'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // dd($request->all());
    $request->validate([
        'Nombre' => 'required|max:50',
        'Apellido' => 'required|max:50',
        'Cedula' => 'required|max:10',
        'Email' => 'required|max:50',
    ]);

    $instructor = Instructores::find($id);
    $instructor->update($request->all());

    return redirect()->route('instructores.index')
        ->with('success', 'Instructor updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Instructores::find($id)->delete();
        return redirect()->route('instructores.index');
    }
}
