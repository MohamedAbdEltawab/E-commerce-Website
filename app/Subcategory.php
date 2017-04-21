<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';


    protected $guarded = array();


    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    

    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
