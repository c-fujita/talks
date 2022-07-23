<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reference extends Model
{
    //
    protected $fillable = [
        'user_name', 'title','body','tag',
    ];

    protected $table = 'References';

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
