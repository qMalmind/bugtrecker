<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleAction extends Model
{
    use HasFactory;
    protected $fillable = ["id_role_action", "id_action", "id_role"];

}
