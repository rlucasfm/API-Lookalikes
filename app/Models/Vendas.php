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
        return $this->where('dataFinalizada BETWEEN CURDATE() - INTERVAL '.$dias.' DAY AND CURDATE()')
                    ->where('formaPagamento', $forma)
                    ->findAll();
    }
}