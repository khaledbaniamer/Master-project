<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;
    protected $fillable = ['prod_quantity','prod_name','prod_image','prod_price' , 'user_id' ,'prod_id',];
}
