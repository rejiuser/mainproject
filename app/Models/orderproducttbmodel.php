<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderproducttbmodel extends Model
{
    use HasFactory;
    protected $table='order_product_tb';
    protected $fillable=['Order_id','product_id','quantity','price','status'];
}
