<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 10/03/2020
 * Time: 23:20
 */

namespace App\Http\Controllers;


use App\Model\Vacina;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class VacinaController extends Controller
{
    public function index()
    {
        try {
            $vacinas = DB::table('vacinas')->get();
            return response()->json($vacinas, Response::HTTP_OK);
        } catch (Exception $exception){
            return response()->json(['error', 'Erro inesperado !'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $vacina = Vacina::findOrFail($id);
            $vacina->update($request->all());
            return response()->json([$vacina, Response::HTTP_OK]);
        } catch (Exception $exception){
            return response()->json(['error'],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show(Request $request, $id)
    {
        try{
            $vacinas = Vacina::find($id);
            return response()->json($vacinas, Response::HTTP_OK);
        } catch (Exception $exception){
            return response()->json(['error', 'Erro inesperado !'], Response::HTTP_NOT_FOUND    );
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $vacina = Vacina::findOrFail($id)->delete();
            return response()->json([], Response::HTTP_OK);
        } catch (Exception $exception){
            return response()->json(['error', Response::HTTP_NOT_FOUND]);
        }


    }
}