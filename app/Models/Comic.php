<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'thumb',
        'type',
        'series',
        'price',
        'sale_date',
        'description'
    ];
}
