<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $primaryKey="idProducto";
    public $timestamps= false; //Se indica false cuando en la tabla no hay este campo.
    public $guarded=[];//Si queremos que no se escriba algun campo, pasamos en el array. 

    
    public function getMarca()
    {
        return $this->belongsTo('App\Marca', 'idMarca', 'idMarca');
    }

    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'idCategoria', 'idCategoria');
    }






}
