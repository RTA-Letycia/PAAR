<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    public function relAnswer(){
        return $this->hasMany('App\Models\answer','question_id');
    }

    public function relQuestionStatus(){
        return $this->belongsTo('App\Models\status','question_status_id');
    }
}
