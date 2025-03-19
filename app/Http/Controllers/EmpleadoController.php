<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    public function index()
    {
        $datos['empleados']=Empleado::paginate(5); //muestra hasta 5 empleados
        return view ('empleado.index', $datos);
    }

    
    public function create()
    {
        return view ('empleado.create');
    }

    public function store(Request $request)
    {
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Email'=>'required|email',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg'
        ];
        
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La foto es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleado = request()->except('_token');

        if ($request->hasFile('Foto')) {
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleado::insert($datosEmpleado);
        return redirect('empleado')->with('mensaje','Empleado agregado con éxito');
    }

    public function show(Empleado $empleado)
    {
        //
    }

    
    public function edit($id)
    {  
       $empleado=Empleado::findOrFail($id);
        return view ('empleado.edit', compact('empleado'));
    }

    
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Email'=>'required|email'
        ];
        
        $mensaje=['required'=>'El :attribute es requerido'];

        if ($request->hasFile('Foto')) {
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'La foto es requerida'];
        }

        $this->validate($request, $campos, $mensaje);
        
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
        $empleado = Empleado::findOrFail($id);
    
        $rutaCompleta = storage_path('app/public/' . $empleado->Foto);
    
        if (file_exists($rutaCompleta)) {
            unlink($rutaCompleta);  // Borra el archivo manualmente
            //$path = str_replace('public/', '', $empleado->Foto); // Eliminar 'public/' de la ruta
            //Storage::delete('public/' . $path);
        }
    
        $empleado->delete();  // Borra el registro en la base de datos
    
        return redirect('empleado')->with('mensaje', 'Empleado eliminado correctamente');
    }
    
}
