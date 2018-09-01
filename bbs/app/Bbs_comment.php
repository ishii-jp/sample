<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bbs_comment extends Model
{
    protected $fillable = array('bbs_id', 'name', 'comment');

    public function bbs(){
        return $this->belongsTo(Bbs::class);
    }
}
