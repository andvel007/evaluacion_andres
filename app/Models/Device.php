<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable=['nombre','marca','modelo','color','serie','mac','sistemaop','cargador','observacion','user_id'];

}
