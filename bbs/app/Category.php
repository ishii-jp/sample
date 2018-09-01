<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('title','category_id');

    public function thread(){
        return $this->hasMany(Thread::class);
    }
}
