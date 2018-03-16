<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $fillable = ['name', 'text_1', 'text_2', 'image_1', 'image_2', 'image_3'];
}
