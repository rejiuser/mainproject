<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addcartmodel extends Model
{
    use HasFactory;
    protected $table='addcart_tb';
    protected $fillable=['Product_id','Quantity','Buyer_id'];
}
