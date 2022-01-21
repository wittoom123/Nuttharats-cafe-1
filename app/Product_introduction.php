<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_introduction extends Model
{
    protected $table ='product_introduction';
    protected $fillable = ['name',
    'detail',
    'image',
];
}