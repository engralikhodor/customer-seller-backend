<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $table = "seller";
    protected $fillable = [
        'first_name',
        'last_name',
        'country',
        'city',
        'currency',
        'cost_per_hour',
        'gender',
        'email',
        'phone',
        'skills',
        'date_of_birth',
        'is_deleted'
    ];
}
