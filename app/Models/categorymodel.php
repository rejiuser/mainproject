<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorymodel extends Model
{
    protected $table='categoryadd_tb';
    protected $fillable=['Category_name'];
    use HasFactory;
}
