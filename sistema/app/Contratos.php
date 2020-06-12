<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contratos extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contratos';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fechaInicioContrato', 'fechaFinContrato', 'responsableContrato',
    ];

    public function condominios()
    {
        return $this->belongsTo('App\Condominios', 'fkCondominioContrato');
    }
}
