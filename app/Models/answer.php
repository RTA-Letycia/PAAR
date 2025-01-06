<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    public function relQuestion(){
        return $this->belongsTo('App/Models/question','question_id');
    }
}
