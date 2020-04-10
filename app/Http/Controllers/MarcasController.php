<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marcas = Marca::paginate(8);
        return view('adminMarcas',
                [
                    'marcas'=>$marcas
                ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formAgregarMarca');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #VALIDACION#
        $reglas=[
            'mkNombre'=> "required|string|min:2|max:20"
      ];
 
        $mensajes=[
         "string" =>"El campo :attribute debe contener un texto.",
         "min" =>"El campo :attribute tiene que tener un minimo :min de caracteres",
         "max" =>"El campo :attribute tiene un máximo de :max",
         "required" => "El campo :attribute esta vacío."
        ];
 
        $this->validate($request,$reglas,$mensajes);


        $mkNombre = $request->input('mkNombre');
        $Marca = new Marca;
        $Marca->mkNombre = $mkNombre;
        $Marca->save();
        return redirect('/adminMarcas')
            ->with('mensaje', 'La marca '.$Marca->mkNombre.' fué agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $marca = Marca::find($id);
        return view('formModificarMarca', [ 'marca'=>$marca ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
         #VALIDACION#
        $reglas=[
            'mkNombre'=> "required|string|min:2|max:20"
      ];
 
        $mensajes=[
         "string" =>"El campo :attribute debe contener un texto.",
         "min" =>"El campo :attribute tiene que tener un minimo :min de caracteres",
         "max" =>"El campo :attribute tiene un máximo de :max",
         "required" => "El campo :attribute esta vacío."
        ];
 
        $this->validate($request,$reglas,$mensajes);
 
        #LLAMAMOS AL METODO FIND Y GUARDAMOS#

        $Marca = Marca::find($request->input('idMarca'));
        $Marca->mkNombre = $request->input('mkNombre');
        $Marca->save();
        return redirect('/adminMarcas')
            ->with('mensaje', 'Marca '.$Marca->mkNombre.' modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function delete($id){ //Metodo que sirve para pasar por post el id  y reenviarlo a formEliminarMarca
        $marca = Marca::find($id);
        return view('formEliminarMarca', [ 'marca'=>$marca ]);
     }


    public function destroy(Request $request) //Metodo que sirve para eliminar, atrapamos por request el idMarca de formulario y luego invocamos al model para llamar a la funcion delete.
    {
           $id=$request["idMarca"];

          $marca=Marca::find($id);

          $marca->delete();

          return redirect('/adminMarcas');
      
    }
}
