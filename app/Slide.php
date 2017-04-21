<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slidephotos';

    protected $fillable = ['photoone', 'phototwo', 'photothree', 'photofour'];
}
