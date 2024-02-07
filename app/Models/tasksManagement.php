<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasksManagement extends Model
{
    use HasFactory;
    protected $table ="tasks";
    protected $primaryKey = "tasks_id";
}
