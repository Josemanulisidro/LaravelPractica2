<?php

namespace App\Http\Controllers;
use App\estudiantes; 
use Illuminate\Http\Request;
use App\Http\Requests\estudiantessRequest;
use App\Http\Requests\validaRequest;
class ControllerEstudiantes extends Controller
{
    public function mostrar()
    {
    return view ('AgregarEstudiantes');
    }
    public function store(validaRequest $request) 
    {
    $estudiantes=new estudiantes();
    $estudiantes->Matricula=$request->Matricula;
    $estudiantes->Nombre=$request->Nombre;
    $estudiantes->Direccion=$request->Direccion;
    $estudiantes-> save();   
    //return $request->all('estudiantes');
    return redirect('estudiantes');
    //retun $requests->all();
}
}