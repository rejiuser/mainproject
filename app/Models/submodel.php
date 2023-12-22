<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class submodel extends Model
{
    use HasFactory;
    protected $table='subcategory_tb';
    protected $fillable=['Category_id','Subcategory'];
}
