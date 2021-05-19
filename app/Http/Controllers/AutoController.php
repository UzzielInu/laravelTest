<?php

namespace App\Http\Controllers;

use App\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index()
    {
      
      $autos = Auto::all();
      return view('auto.index', ['autos' => $autos]);
    }

    public function saveAuto(Request $request)
    {
      $auto = new Auto();
      $auto->nombre = $request->nombre;
      $auto->precio = $request->precio;
      $auto->save();
      return "guardado";
    }

    public function getAuto($id)
    {
      $auto = Auto::find($id);
      return $auto;
    }

    public function updateAuto(Request $request, $id)
    {
      $auto = Auto::find($id);
      $auto->nombre = $request->nombre;
      $auto->precio = $request->precio;
      $auto->save();
      return $auto;
    }

    public function deleteAuto($id)
    {
      $auto = Auto::find($id);
      $auto->delete();
      return "registro eliminado";
    }
}
