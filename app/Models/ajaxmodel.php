<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ajaxmodel extends Model
{
    use HasFactory;
    protected $table='insert_tb';
    protected $fillable=['Name','Place','Dob'];
}
