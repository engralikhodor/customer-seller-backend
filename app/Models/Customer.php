<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $fillable = [
        'first_name',
        'last_name',
        'country',
        'city',
        'currency',
        'pay_per_hour',
        'gender',
        'email',
        'phone',
        'date_of_birth',
        'is_deleted'
    ];
}
