<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Evento extends Model
{
    use SoftDeletes;
    protected $perPage = 6;

    protected $fillable = ['ano','mes','dia', 'nome', 'imagem', 'legenda', 'saibamais','fonteimagempcp', 'destaque', 'ordem_exibicao','tipo_evento_id'];


    public function imagensAdicionais()
    {

        return $this->hasMany(ImagemEventoAdicional::class);

    }

    public function tipoEvento()
    {

        return $this->belongsTo(EventoTipo::class, 'tipo_evento_id');

    }



}

