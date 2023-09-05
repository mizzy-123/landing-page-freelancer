<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'categories';

    public function projek()
    {
        return $this->hasMany(projek::class);
    }

    public function artikel()
    {
        return $this->hasMany(artikel::class);
    }
    public function income()
    {
        return $this->hasMany(artikel::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
