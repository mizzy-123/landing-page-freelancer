<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    use HasFactory;
    protected $table = 'incomes'; 

    public function category(){
        return $this->belongsTo(category::class);
    }
}
