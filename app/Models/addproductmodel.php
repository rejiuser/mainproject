<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addproductmodel extends Model
{
    use HasFactory;
    protected $table='addproduct_tb';
    protected $fillable=['Seller_id','Product_Name','Category','Subcategory','Price','Quantity','Photo'];
}
