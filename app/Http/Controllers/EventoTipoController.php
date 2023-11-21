<?php

namespace App\Http\Controllers;

use App\Models\EventoTipo;
use App\Models\Historico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventoTipoController extends Controller
{
    public function index()
    {
        return EventoTipo::all();

    }

    public function store(Request $request)
    {

        $tipoNovo = EventoTipo::create([
            'tipo' => $request['tipo']
        ]);

        Historico::create([
            'evento' => 'Foi criado o tipo de evento: '.$tipoNovo->tipo,
            'responsavel'=> Auth::user()->nome,
            'user_id'=> Auth::user()->id
        ]);

        return response()
            ->json($tipoNovo, 201);

    }

    public function destroy($id)
    {

        $tipo = EventoTipo::find($id);

        if (is_null($tipo)) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }

        Historico::create([
            'evento' => 'Foi removido o tipo de evento: '.$tipo->tipo,
            'responsavel'=> Auth::user()->nome,
            'user_id'=> Auth::user()->id
        ]);


        // Exclui o tipo de evento
        $tipo->delete();

        return response()->json([
            'mensagem' => 'Tipo de Evento excluído com sucesso'
        ], 200);

    }

    public function update(int $id, Request $request)
    {
        $tipo = EventoTipo::find($id);

        if (is_null($tipo)) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }

        Historico::create([
            'evento' => 'Foi alterado o tipo de evento de: '.$tipo->tipo . ', para: '.$request['tipo'],
            'responsavel'=> Auth::user()->nome,
            'user_id'=> Auth::user()->id
        ]);

        $tipo->tipo = $request['tipo'];
        $tipo->save();

        return $tipo;
    }
}
