<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialInstitution extends Model
{
    use HasFactory;
    //Nome da Tabela
    protected $table = 'financial_institution';

    //Inputs que serão incluidos pela inserção em massa
    protected $fillable = [
        'institution',
        'balance',
        'total_value',
        'description',
        'completion_date',
        'user_id'
    ];
 

    // public $institution;
    // public $balance;
    // public $totalValue;
    // public $description;
    // public $completionDate;
    // public $objUser;

}
