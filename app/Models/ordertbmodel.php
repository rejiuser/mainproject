<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordertbmodel extends Model
{
    use HasFactory;
    protected $table='order_tb';
    protected $fillable=['buyer_id','Name','House_no','pin','District','State','Mobile','Landmark','Total','Status'];
}
