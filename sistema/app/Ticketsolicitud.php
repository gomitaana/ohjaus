<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticketsolicitud extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ticketsolicitud';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fechaVisitaTicket', 'horaInicialPermitidaTicket', 'horaCaducaTicket', 'fechaCaducaTicket',
    ];

    public function registrovisita()
    {
        return $this->hasOne('App\Registrovisita', 'fkTicketSolicitudVisita');
    }
    public function invitado()
    {
        return $this->belongsTo('App\Invitado', 'fkInvitadoTicket');
    }
}
