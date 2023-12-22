<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyermodel extends Model
{
    protected $table='buyerregister_tb';
    protected $fillable=['Name','Email','Phone','Username','Password','Photo','Status'];
    use HasFactory;
}
