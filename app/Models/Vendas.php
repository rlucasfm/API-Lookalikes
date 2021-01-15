<?php namespace App\Models;

use CodeIgniter\Model;

class Vendas extends Model
{
    protected $table            = 'mensagens';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [];
    protected $useTimestamps    = false;
    protected $skipValidation   = true;

    public function getLastest($dias, $forma)
    {
        $cursos = ['CURSO DE APH - VERSÃO ONLINE','CURSO ONLINE DE APH 1.0','CURSO DE APH 80H'];
        $status = ['Finalizada'];
        return $this->distinct()
                    ->where('dataFinalizada BETWEEN CURDATE() - INTERVAL '.$dias.' DAY AND CURDATE()')
                    ->where('formaPagamento', $forma)
                    ->whereIn('nomeProduto',$cursos)
                    ->whereIn('statusVenda',$status)                    
                    ->findAll();
    }

    public function getTodos($dias)
    {
        $cursos = ['CURSO DE APH - VERSÃO ONLINE','CURSO ONLINE DE APH 1.0','CURSO DE APH 80H'];
        $status = ['Finalizada'];
        return $this->distinct()
                    ->where('dataFinalizada BETWEEN CURDATE() - INTERVAL '.$dias.' DAY AND CURDATE()')                    
                    ->whereIn('nomeProduto',$cursos)
                    ->whereIn('statusVenda',$status)                    
                    ->findAll();
    }
}