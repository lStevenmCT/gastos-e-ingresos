<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table='income';
    protected $fillable = [
        'id',
        'date',
        'title',
        'amount',
        'user_id',
        'category_id',
    ];
}
