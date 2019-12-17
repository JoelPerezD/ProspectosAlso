<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'RazonSocial',
        'Giro',
        'Telefono',
        'Direccion',
        'Zona',
        'Ciudad',
        'Estado',
        'Contacto',
        'Correo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
