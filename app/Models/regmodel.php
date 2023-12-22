<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regmodel extends Model
{
    use HasFactory;
    protected $table='seller_reg_tb';
    protected $fillable=['Name','Email','Phone','Username','Password','Photo','Status'];
}
