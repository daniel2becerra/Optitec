<?php

namespace Optitec;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $fillable = ['name', 'reference', 'color', 'purchasePrice', 'salePrice', 'quantity'];
}
