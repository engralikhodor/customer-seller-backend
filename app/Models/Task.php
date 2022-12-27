<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = "task";
    protected $fillable = [
        "date_time_from",
        "date_time_to",
        "city",
        "location_lat",
        "location_lng",
        "total_cost",
        "task_type",
        "created_by_id",
        "assigned_to_id",
        "status",
    ];
}
