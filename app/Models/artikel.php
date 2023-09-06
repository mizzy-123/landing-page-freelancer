<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'artikels';

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(category::class, 'id_category');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) { // whre has berfungsi untuk mencari relasinya siapa
                $query->where('slug', $category);
            });
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
