<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    //
    protected $fillable = [
        'user_name', 'title','body',
    ];

    protected $table = 'Replies';
}
