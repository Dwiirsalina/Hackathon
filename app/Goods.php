<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';
    public $incrementing = false;
    protected $filltable = [
    	'id','name','details','price','videos_id'
    ];
}
