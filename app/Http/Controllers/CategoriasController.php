<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::paginate(8);
        return view('adminCategorias', [ 'categorias' =>  $categorias ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formAgregarCategoria');
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
            'catNombre'=> "required|string|min:2|max:20"
      ];
 
        $mensajes=[
         "string" =>"El campo :attribute debe contener un texto.",
         "min" =>"El campo :attribute tiene que tener un minimo :min de caracteres",
         "max" =>"El campo :attribute tiene un máximo de :max",
         "required" => "El campo :attribute esta vacío."
        ];
 
        $this->validate($request,$reglas,$mensajes);

        $categoria = new Categoria();
        $categoria->catNombre = request('catNombre');
        $categoria->save();
        return redirect('/adminCategorias')->with('mensaje', 'Categoria '.$categoria->catNombre.' agregada con éxito');
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
        $categoria = Categoria::find($id);
        return view('formModificarCategoria', [ 'categoria'=>$categoria ]);
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
            'catNombre'=> "required|string|min:2|max:20"
      ];
 
        $mensajes=[
         "string" =>"El campo :attribute debe contener un texto.",
         "min" =>"El campo :attribute tiene que tener un minimo :min de caracteres",
         "max" =>"El campo :attribute tiene un máximo de :max",
         "required" => "El campo :attribute esta vacío."
        ];
 
        $this->validate($request,$reglas,$mensajes);

        #LLAMAMOS AL METODO BIND Y GUARDAMOS#
        $Categoria = Categoria::find($request->input('idCategoria'));
        $Categoria->catNombre = $request->input('catNombre');
        $Categoria->save();
        return redirect('/adminCategorias')
            ->with('mensaje', 'La Categoria '.$Categoria->catNombre.'  fué modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id){
        $categoria = Categoria::find($id);
        return view('formEliminarCategoria', [ 'categoria'=>$categoria ]);
    }

    public function destroy(Request $request)
    {
        //
        $id=$request["idCategoria"];

          $categoria=Categoria::find($id);

          $categoria->delete();

          return redirect('/adminCategorias')->with('mensaje', 'La Categoria '.$categoria->catNombre.'sé elimino con éxito');

    }
}
