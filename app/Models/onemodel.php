<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onemodel extends Model
{
protected $table='admin_tb';
protected $fillable=['Name','Email','Phone','UserName','Password'];

    use HasFactory;
}
