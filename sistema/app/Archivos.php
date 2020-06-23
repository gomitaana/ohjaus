<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archivos extends Model
{
       use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'archivos';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreArchivo', 'extencionArchivo', 'tamanoArchivo', 'uriArchivo', 'mimeArchivo', 'tipoArchivo',
    ];

    public function invitado()
    {
        return $this->hasOne('App\Invitado', 'fkFotoIdentificacionInvitado');
    }
    public function persona()
    {
        return $this->hasOne('App\Persona', 'fkFotoPerfilUsuario');
    }
   
}
