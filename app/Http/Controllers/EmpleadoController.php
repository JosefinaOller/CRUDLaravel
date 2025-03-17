<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['empleados']=Empleado::paginate(5); //muestra hasta 5 empleados
        return view ('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosEmpleado = request()->except('_token');

        if ($request->hasFile('Foto')) {
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleado::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $empleado=Empleado::findOrFail($id);
        return view ('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except(['_token','_method']);

        $empleado = Empleado::findOrFail($id);

        if ($request->hasFile('Foto')) {
            if ($empleado->Foto) {
              Storage::delete('public/'.$empleado->Foto); //elimino la foto antigua  
            }
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public'); //guardo la nueva foto
        }
        
        else {
            $datosEmpleado['Foto'] = $empleado->Foto;
        }
        //$empleado=Empleado::findOrFail($id);
         Empleado::where('id','=',$id)->update($datosEmpleado); //consulto si coinciden los id's.
        return redirect()->route('empleado.index')->with('mensjae','Empleado actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('empleado');
    }
}
