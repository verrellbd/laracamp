<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'];
}
