<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sitesetting extends Model
{
    protected $table = 'sitesetting';

    protected $fillable = [

    		'settingname', 'value'
    ];
}
