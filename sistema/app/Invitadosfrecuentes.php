<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitadosfrecuentes extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invitadosfrecuentes';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    public function invitado()
    {
        return $this->belongsTo('App\Invitado', 'fkInvitadoInvitadoFrecuente');
    }
    public function persona()
    {
        return $this->belongsTo('App\Persona', 'fkPersonaInvitadoFrecuente');
    }
    public function casas()
    {
        return $this->belongsTo('App\Casas', 'fkCasaInvitadoFrecuente');
    }
}
