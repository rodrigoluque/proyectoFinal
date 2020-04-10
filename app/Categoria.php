<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    //public $table="categorias"; //No hace falta declarar porque la clase es singular de la tabla y laravel lo reconoce.
    protected $primaryKey="idCategoria";
    public $timestamps= false; //Se indica false cuando en la tabla no hay este campo.
    public $guarded=[];//Si queremos que no se escriba algun campo, pasamos en el array.    
}
