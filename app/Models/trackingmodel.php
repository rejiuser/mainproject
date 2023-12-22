<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trackingmodel extends Model
{
    use HasFactory;
    protected $table='track_order_tb';
    protected $fillable=['Order_id','Details','Date'];
}
