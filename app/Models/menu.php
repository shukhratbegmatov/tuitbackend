<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    public $table = 'menu';
    public $fillable = [
        'id',
        'name',
    ];
}