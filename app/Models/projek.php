<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projek extends Model
{
    use HasFactory;
    protected $table = 'projeks';

    public function category(){
        return $this->belongsTo(category::class);
    }
}
