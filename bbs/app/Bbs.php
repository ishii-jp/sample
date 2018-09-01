<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bbs extends Model
{
    protected $fillable = array('thread_id', 'name', 'content');

    public function thread(){
        return $this->belongsTo(Thread::class);
    }

    public function bbs_comment(){
        return $this->hasMany(bbs_comment::class);
    }
}
