<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'description', 'ingredients', 'instructions', 'time', 'rating', 'shares'];
}
