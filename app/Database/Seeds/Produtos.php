<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $nome = ['Base Ruby Rose', 'Delineador Ruby Rose','Paleta De Sombra Ruby Rose', 'Gloss Kiko Milano', 'Corretivo Tracta', 'Paleta de Contorno Océane'];
        $desc = ['Base Soft, efeito matte','Delineador Líquido','Paleta De Sombra Soft Nude', 'Gloss, Instant Colour Matte Liquid', 'Corretivo efeito matte', 'Paleta de contorno, iluminador e blush'];
        $cor = ['Cor 01', 'Preto', 'Nude', 'Pink', 'Cor 02', 'Opaca'];
        $cobertura = ['Alta', 'Alta', 'Alta', 'Baixa', 'Alta', 'Média'];
        $tamanho = ['20ml', '5ml', 'Grande', '5ml', '6ml', 'Médio'];
        $valor = [25,20,40,45,20,60];

        for($x = 0; $x < 6; $x++){
            $data = [
                'nome' => $nome[$x],
                'descricao' => $desc[$x],
                'cor' => $cor[$x],
                'cobertura' => $cobertura[$x],
                'tamanho' => $tamanho[$x],
                'valor'    => $valor[$x],
            ];

            
            $this->db->table('produtos')->insert($data);
        }
    }
}