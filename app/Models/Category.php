<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /*
     * por si no se crea con la convencion es decir que la tabla no este en plurar y el modelo es diferente
     * entonces lo que se hace es indicarle que tabla usar y se hace de esta manera
     *
     * protected $table = 'nombre_de_la_tabla'
     *
     * pero por el contrario si se una la convencion tabla categories y modelo category
     * no abria que crear ese protected $table
    */
    protected $table = 'categories';

}
