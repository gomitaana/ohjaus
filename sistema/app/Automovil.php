<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'automovil';

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'marcaAutomovil', 'colorAutomovil', 'noPlacaAutomovil', 'tipoAutomovil', 'statusAutomovil'
    ];

    public function casa()
    {
        return $this->belongsTo('App\Casa', 'fkCasaAutomovil');
    }

}
