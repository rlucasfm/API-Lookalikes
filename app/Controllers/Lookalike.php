<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Vendas;

class Lookalike extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }

    public function boleto($dias)
    {
        $vendasModel = new Vendas();
        $vendas = array_column($vendasModel->getLastest($dias), 'email');
        $data = [
            'titulo' => 'Lookalikes - Boletos / '.$dias.' dias',
            'vendas' => $vendas
        ];
        return view('viewAPI', $data);
    }
}