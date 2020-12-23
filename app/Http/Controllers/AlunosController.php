<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AlunoRepository;
use App\Http\Requests\AlunosRequest;

class AlunosController extends Controller
{
    private $alunoRepository;

    function __construct()
    {
        $this->alunoRepository = new AlunoRepository();
    }
    

    public function index ($id)
    {
        try {
            $resultado = $this->alunoRepository->index($id);
            
        }
        catch(\Exception $e) {
            return response()->json([
                'resultado' => [],
                'mensagem' => 'Erro no servidor',
                'status' => 'ERROR'
            ], 500);

        }

        if($resultado) {
            return response()->json([
                'resultado' => $resultado,
                'mensagem' => 'Dados retornados com sucesso',
                'status' => 'OK'
            ], 200);

        }
        else {
            return response()->json([
                'resultado' => $resultado,
                'mensagem' => 'Nenhum registro encontrado',
                'status' => 'OK'
            ], 200);
        }

        
    }

    public function salvar(AlunosRequest $request, $id = null)
    {
        $validated = $request->validated();
        //dd($request->all());
        $input = $request->all();
        $input['id'] = $id;
        $inserir= ($input['id']) ? false: true;
        //dd($input);
        try {
           $resultado = $this->alunoRepository->salvar($input, $inserir);

        }
        catch(\Exception $e) {
            return response()->json([
                'resultado' => [],
                'mensagem' => 'Erro no servidor'
            ], 500);
        }

        
        return response()->json([
            'resultado' => $resultado,
            'mensagem' => 'Dados salvos com sucesso'
        ], 200);

        


        

    }

    public function excluir($id)
    {
        try {
            $resultado = $this->alunoRepository->excluir($id);
            
        }
        catch(\Exception $e) {
            return response()->json([
                'resultado' => [],
                'mensagem' => 'Erro no servidor'
            ], 500);

        }

        if($resultado) {
            return response()->json([
                'resultado' => $resultado,
                'mensagem' => 'Dados excluídos com sucesso'
            ], 200);

        }
        else {
            return response()->json([
                'resultado' => $resultado,
                'mensagem' => 'Nenhum registro encontrado'
            ], 200);
        }

    }
}
