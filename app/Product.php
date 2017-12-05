<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
          'product_id', 'product_brand_id',
          'product_code', 'product_name',
          'product_image', 'product_description',
          'product_price', 'product_quantity',
          'product_availability'
     ];
}
