<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = ['users', 'date', 'price', 'paid_out', 'racing_id'];
}
