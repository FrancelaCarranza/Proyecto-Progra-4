<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderItems extends Model
{
    use HasFactory;


    protected $guarded = [];
    public function orderItem(){
 
        return $this->belongsTo(orders::class);
    }
      
}
