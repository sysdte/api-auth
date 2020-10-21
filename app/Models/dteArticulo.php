<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dteArticulo extends Model
{
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dte_articulo';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CodItem',
        'CodBarra',
        'DepartItem',
        'NmbItem',
        'PrcItem',
        'IVA',
        'CodImpAdic',
        'Activo',
    ];


    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = '76688976';

}
