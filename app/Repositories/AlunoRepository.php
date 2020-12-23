<?php

namespace App\Repositories;

use App\Models\Aluno;
use App\Interfaces\InterfaceRepository;

class AlunoRepository implements InterfaceRepository 
{
    public function index($id)
    {
        return Aluno::find($id);

    }

    public function salvar ($dados, $inserir = null)
    {
               
        if ($inserir)
        {
            $aluno = new Aluno();
            $aluno->fill($dados);
            $aluno->save(); 
            return $aluno;
        }
        else {

            $aluno = new Aluno();
            $aluno = Aluno::find($dados['id']);
            $aluno->fill($dados);
            $aluno->save(); 
            return $aluno;
        }
    }

    public function excluir($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return $aluno;
        

    }
}