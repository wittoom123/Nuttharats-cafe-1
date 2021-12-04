<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coffee_history extends Model
{
    protected $table ='coffee_history';
    protected $fillable = ['name',
'detail',
'image',
];
}
