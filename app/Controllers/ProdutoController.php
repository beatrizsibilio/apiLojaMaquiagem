<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ProdutoController extends ResourceController
{

    protected $modelName = 'App\Models\ProdutosModel';
    protected $format    = 'json';

    public function listarTodos()
    {
        return $this->respond($this->model->findAll());
    }

    public function produtoPesquisa($id){
        return $this->respond($this->model->find($id));

    }
}
