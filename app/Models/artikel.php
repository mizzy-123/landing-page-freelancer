<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    public function category(){
        return $this->belongsTo(category::class);
    }
}
