<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;
    protected $primaryKey = "id_action";
    protected $fillable = ["id_action", "action_name", "action_description"];
}
