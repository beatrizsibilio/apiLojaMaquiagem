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

    public function gravarProduto(){
        $this->produtosModel->save([
            'nome' => $this->request->getPost('nome'),
            'descricao' => $this->request->getPost('descricao'),
            'cor' => $this->request->getPost('cor'),
            'cobertura' => $this->request->getPost('cobertura'),
            'tamanho' => $this->request->getPost('tamanho'),
            'valor' => $this->request->getPost('valor')
        ]);
    }

    public function deletarProduto($id){
        $this->produtosModel->delete($id);
    }

    public function atualizarProduto($id){
        $data = $this->request->getJSON();
        $this->produtosModel->update($id, $data);
    }
}
