<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mproduct extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'unit',
        'price',
        'quantity',
    ];
}
