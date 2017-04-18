<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable=['subject','type','thread','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
