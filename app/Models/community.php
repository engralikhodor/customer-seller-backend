<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class community extends Model
{
    use HasFactory;
    protected $table = "community";
    protected $fillable = [
        'id',
        'name',
        'description',
        'is_deleted'
    ];
}
