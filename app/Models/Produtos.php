<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'prodcotacao';

    public $timestamps = false;
    
    protected $fillable = [
        'proc_codigo', 'proc_descricao', 'proc_complemento','proc_marca','proc_unid_codigo','proc_qemb','proc_qtde','proc_codbarras'
    ];
}
