<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table            = 'produtos';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nome', 'descricao', 'cor', 'coertura', 'tamanho', 'valor'];

}
