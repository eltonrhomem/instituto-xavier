<?php
namespace App\Interfaces;



interface InterfaceRepository 
{
    public function index($id);

    public function salvar ($dados);

    public function excluir ($id);

}