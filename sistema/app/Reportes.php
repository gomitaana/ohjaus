<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reportes extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reportes';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tituloReporte', 'descripcionReporte', 'horaCreacionReporte', 'statusReporte'
    ];

    public function persona()
    {
        return $this->belongsTo('App\Persona', 'fkPersonaReporte');
    }
}
