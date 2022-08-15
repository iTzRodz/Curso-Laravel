<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1'];
        $fornecedor = [
            0 => ['nome' => 'Fornecedores', 'status' => 'N'],
            1 => ['nome' => 'Fornecedores 1', 'Status' => 'S', 'cnpj' => '']
        ];

        $msg = isset($fornecedor[1]['cnpj']) ? 'CNPJ Informado' : 'CNPJ não informado';
        echo $msg;
        return view('app.fornecedor.index', compact('fornecedores', 'fornecedor'));
    }
}
