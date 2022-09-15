<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $fillable = [
        'nav_name', 'nav_link'
    ];
}
