<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Auth;

class Disscusion extends Model
{
    protected $fillable = ['title', 'content_text', 'slug', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
