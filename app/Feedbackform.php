<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedbackform extends Model
{
    protected $table = 'feedback';
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
