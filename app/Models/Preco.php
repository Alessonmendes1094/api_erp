<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preco extends Model
{
    protected $table = 'movcotacao';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'mcot_forn_codigo', 
        'mcot_prod_codigo',
        'mcot_preco',
        'mcot_icms',
        'mcot_subtrib',
        'mcot_perc',
        'mcot_frete',
        'mcot_fpgt_codigo',
        'mcot_data',
        'mcot_unid_codigo',
        'mcot_espe_codigo',
        'mcot_obs',
        'mcot_fcpst'
    ];
}
