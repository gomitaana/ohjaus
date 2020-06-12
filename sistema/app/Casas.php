<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Casas extends Model
{
     use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'casas';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'noInteriorCasa', 'totalPersonasCasa', 'totalMascotasCasa', 'nombreContactoPrincipalCasa', 'numeroContactoPrincipalCasa', 'statusCasa',
    ];

    public function invitadosfrecuentes()
    {
        return $this->hasOne('App\InvitadosFrecuentes', 'fkCasaInvitadoFrecuente');
    }
    public function automovil()
    {
        return $this->hasOne('App\Automovil', 'fkCasaAutomovil');
    }
    public function condominios()
    {
        return $this->belongsTo('App\Condominios', 'fkCondominioCasa');
    }}
