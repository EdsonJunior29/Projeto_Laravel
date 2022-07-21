<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $p1, int $p2)
    {
        $variavelTesteIfElse = [
            0 => [
                'nome'   => 'Fornecedor 1',
                'status' => 'N',
                'CNPJ'   => '12.258.000/0001-56'
            ],
            1 => [
                'nome'   => 'Fornecedor 2',
                'status' => 'S'
            ],
            2 => [
                'nome'   => 'Fornecedor 3',
                'status' => 'S',
                'CNPJ' => ''
                ]
        ];

        $msg = isset($variavelTesteIfElse[1]['CNPJ']) ? 'CNPJ informado' : 'CNPJ não informado ';
        echo $msg;

        //echo "A soma de $p1 e $p2 é: ".($p1 + $p2);
        //return view('site.test', ['p1' => $p1, 'p2' => $p2]);Encaminhando valores recebidos como parâmetro para a view(Array associativo)
        //return view('site.test')->with('p1', $p1)->with('p2', $p2); // método with do laravel
        return view('site.test', compact('p1', 'p2', 'variavelTesteIfElse')); //método compact do laravel
    }
}
