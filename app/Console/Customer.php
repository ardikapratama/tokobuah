<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'Customer';

    protected $fillable = [
      'customer_id',
      'name',
      'address'
      ];
}
