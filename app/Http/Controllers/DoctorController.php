<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
  //
  function index(){
    $doctors = Doctor::all();
    $title = 'Listado de Doctores';
    return view('doctors.index', compact('title','doctors'));
  }

  function show(Doctor $doctor)
  {
    return view('doctors.show', compact('doctor'));
  }

  function create(){
    return view('doctors.create'); 
  }

  public function store()
  {
    $data = request()->validate([
      'name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'document' => 'required',
    ], [
      'name.required' => 'El campo nombre es obligatorio'
    ]);
    Doctor::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'phone' => $data['phone'],
      'document' => $data['document']
    ]);
    return redirect()->route('doctors.index');
  }

  public function edit(Doctor $doctor)
  {
    return view('doctors.edit', ['doctor' => $doctor]);
  }
  public function update(Doctor $doctor)
  {
    $data = request()->validate([
      'name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'document' => 'required',
    ]);

    $doctor->update($data);
    return redirect()->route('doctors.show', ['doctor' => $doctor]);
  }

  function destroy(Doctor $doctor)
  {
    $doctor->delete();
    return redirect()->route('doctors.index');
  }
}
