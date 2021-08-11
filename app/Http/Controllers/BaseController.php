<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $classe;

    public function index(Request $request)
    {
        return response()->json($this->classe::all(),200);
    }
    public function show($id)
    {
        $recurso = $this->classe::find($id);
        if (is_null($recurso)){
            return response()->json('Recurso não encontrado',404);
        }
        return response()->json($recurso,200);
    }

    public function store(Request $request)
    {
       return response()->json(
           $this->classe::create($request->all()),
           201
       );
    }

    public function update($id,Request $request)
    {
        $recurso = $this->classe::find($id);
        if(is_null($recurso)){
            return response()->json('Recurso não encontrado',404);
        }
        $recurso->fill($request->all());
        $recurso->save();
        return response()->json($recurso,200);
    }

    public function destroy($id)
    {
        $recurso = $this->classe::destroy($id);
        if($recurso === 0){
            return response()->json('Recurso não encontrado',404);
        }
        return response()->json('Recurso removido com sucesso',200);
    }
}
