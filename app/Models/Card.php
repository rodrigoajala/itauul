<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'account_holder',
        'taxpayer_registry',
        'card_number',
        'month_validity',
        'expiry_year',
        'cvv',
        'flag'
];

}
