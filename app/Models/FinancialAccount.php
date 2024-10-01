<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialAccount extends Model
{
    use HasFactory;
    //Nome da Tabela
    protected $table = 'financial_account';

    //Inputs que serão incluidos pela inserção em massa
    protected $fillable = [
        'identification',
        'institution',
        'balance',
        'type',
        'description',
        'user_id'
    ];
}
