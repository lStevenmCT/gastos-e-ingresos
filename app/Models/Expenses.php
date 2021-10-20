<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='expenses';
    protected $fillable = [
        'id',
        'date',
        'title',
        'amount',
        'user_id',
        'category_id',
    ];

}
