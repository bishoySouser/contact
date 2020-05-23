<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailSent extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
