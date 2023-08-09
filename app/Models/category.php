<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    
    protected $table = 'categories';

    public function projek(){
        return $this->hasMany(projek::class);
    }

    public function artikel(){
        return $this->hasMany(artikel::class);
    }
    public function income(){
        return $this->hasMany(artikel::class);
    }

}
