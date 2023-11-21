<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EventoTipo extends Model
{
    use SoftDeletes;

    protected $table = 'tipo_eventos';

    protected $fillable = ['tipo'];


    public function eventos()
    {

        return $this->hasMany(Evento::class);

    }

}

