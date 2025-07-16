<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'db_host',
        'db_port',
        'db_name',
        'db_username',
        'db_password',
        'subscription_start_date',
        'subscription_end_date',
        'renewal_date',
        'price_per_month',
        'amount_paid',
        'status',
    ];

}
