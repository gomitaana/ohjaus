<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registrovisita extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'registrovisita';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'horaLlegadaVisita', 'fechaLlegadaVisita', 'horaSalidaVisita', 'fechaSalidaVisita', 'llegadaAutorizadaPor', 'salidaAutorizadaPor', 'placaAutoVisita', 'motivoVisita',
    ];

    public function ticketsolicitud()
    {
        return $this->belongsTo('App\Ticketsolicitud', 'fkTicketSolicitudVisita');
    }
}
