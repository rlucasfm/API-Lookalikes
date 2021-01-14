<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Vendas;
// Para gerar um JSON na saida
use CodeIgniter\API\ResponseTrait;

class Lookalike extends Controller
{

    use ResponseTrait;

    public function index()
    {
        return view('welcome_message');
    }

    public function boleto($dias)
    {
        $vendasModel = new Vendas();
        $vendas = array_column($vendasModel->getLastest($dias, 'Boleto'), 'email');

        return $this->respond($vendas, 200);
    } 
    
    public function cartao($dias)
    {
        $vendasModel = new Vendas();
        $vendas = array_column($vendasModel->getLastest($dias, 'Cartão de crédito'), 'email');

        return $this->respond($vendas, 200);
    }  
    
    public function gratis($dias)
    {
        $vendasModel = new Vendas();
        $vendas = array_column($vendasModel->getLastest($dias, 'Grátis'), 'email');

        return $this->respond($vendas, 200);
    } 
}