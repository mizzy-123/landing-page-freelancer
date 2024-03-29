<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avisitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_count',
        'visit_date',
    ];
}
