<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitado extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invitado';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreCompletoInvitado', 'telefonoInvitado', 'generoInvitado', 'emailInvitado',
    ];

    public function invitadosfrecuentes()
    {
        return $this->hasOne('App\Invitadosfrecuentes', 'fkInvitadoInvitadoFrecuente');
    }
    public function ticketsolicitud()
    {
        return $this->hasOne('App\Ticketsolicitud', 'fkInvitadoTicket');
    }
    public function archivos()
    {
        return $this->belongsTo('App\Archivos', 'fkFotoIdentificacionInvitado');
    }
}
