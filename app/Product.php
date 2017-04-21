<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'price', 'amount','color',  'created_at', 'updated_at'];

    public function subcategory()
    {
    	return $this->belongsTo('App\Subcategory');
    }
}
