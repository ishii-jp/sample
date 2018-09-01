<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = array('category_id','name', 'content');

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function bbs(){
        return $this->hasMany(Bbs::class);
    }
}
