<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


abstract  class BaseController
{

    //teste
    protected $classe;


    public function index(Request $request)
    {
       return $this->classe::paginate($request->per_page);

    }

    public function store(Request $request)
    {

        return response()
            ->json($this->classe::create($request->all()),  201);

    }

    public function show($id)
    {

        $recurso = $this->classe::find($id);

        if (is_null($recurso)) {

            return response()->json('', 204);

        }

        return response()->json($recurso);

    }

    public function update(int $id, Request $request)
    {

        $recurso = $this->classe::find($id);

        if (is_null($recurso)) {

            return response()->json([
                'erro'=>'Recurso não encontrado'
            ], 404);

        }

        $recurso->fill($request->all());
        $recurso->save();

        return $recurso;

    }

    public function destroy($id)
    {

        $recurso = $this->classe::destroy($id);

        if ($recurso === 0) {

            return response()->json([
                'erro'=>'Recurso não encontrado'
            ], 404);

        } else {
            return response()->json('', 204);
        }

    }

}
