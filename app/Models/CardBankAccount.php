<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardBankAccount extends Model
{
    use HasFactory;

    protected $table = 'card_bank_account';

    protected $fillable = [
        'identification',
        'limit',
        'credit_card_expiration',
        'bank_account_id'
    ];
}
