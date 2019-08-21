<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacient;

class PacientController extends Controller
{
  function index(){
    $pacients = Pacient::all();
    $title = 'Listado de Pacientes';
    return view('pacients.index', compact('title','pacients'));
 }

  function show(Pacient $pacient)
  {
    return view('pacients.show', compact('pacient'));
  }

  function create(){
    return view('pacients.create'); 
  }

  public function store()
  {
    $data = request()->validate([
      'name' => 'required',
      'num_document' => 'required',
      'email' => 'required',
      'age' => 'required',
      'born_date' => 'required',
      'city_born' => 'required',
    ], [
      'name.required' => 'El campo nombre es obligatorio'
    ]);
    Pacient::create([
      'name' => $data['name'],
      'num_document' => $data['num_document'],
      'email' => $data['email'],
      'age' => $data['age'],
      'born_date' => $data['born_date'],
      'city_born' => $data['city_born'], 
    ]);
    return redirect()->route('pacients.index');
  }

  public function edit(Pacient $pacient)
  {
    return view('pacients.edit', ['pacient' => $pacient]);
  }
  public function update(Pacient $pacient)
  {
    $data = request()->validate([
      'name' => 'required',
      'num_document' => 'required',
      'email' => 'required',
      'age' => 'required',
      'born_date' => 'required',
      'city_born' => 'required',
    ]);

    $pacient->update($data);
    return redirect()->route('pacients.show', ['pacient' => $pacient]);
  }

  function destroy(Pacient $pacient)
  {
    $pacient->delete();
    return redirect()->route('pacients.index');
  }

}
