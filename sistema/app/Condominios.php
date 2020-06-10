<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condominios extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'condominios';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreCondominio', 'paisCondominio', 'estadoCondominio', 'direccionCondominio', 'codigoPostalCondominio', 'totalDeCasasCondominio',
    ];

    public function contratos()
    {
        return $this->hasOne('App\Contratos', 'fkCondominioContrato');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'fkUsuarioCondominio');
    }
}
