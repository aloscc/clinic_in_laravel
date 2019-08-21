<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
  //
  function index(){
    $specialties = Specialty::all();
    $title = 'Listado de Especialidades';
    return view('specialties.index', compact('title','specialties'));
  }

  function show(Specialty $specialty)
  {
    return view('specialties.show', compact('specialty'));
  }

  function create(){
    return view('specialties.create'); 
  }

  public function store()
  {
    $data = request()->validate([
      'specialty' => 'required',
      'description' => 'required',
    ], [
      'name.required' => 'El campo nombre es obligatorio'
    ]);
    Specialty::create([
      'specialty' => $data['specialty'],
      'description' => $data['description'],
    ]);
    return redirect()->route('specialties.index');
  }

  public function edit(Specialty $specialty)
  {
    return view('specialties.edit', ['specialty' => $specialty]);
  }
  public function update(Specialty $specialty)
  {
    $data = request()->validate([
      'specialty' => 'required',
      'description' => 'required',
    ]);

    $specialty->update($data);
    return redirect()->route('specialties.show', ['specialty' => $specialty]);
  }

  function destroy(Specialty $specialty)
  {
    $specialty->delete();
    return redirect()->route('specialties.index');
  }

}
