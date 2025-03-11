<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    protected $fillable = ['nombre', 'aldea', 'chakra'];
}