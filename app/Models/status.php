<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    public function relStatusQuestion(){
        return $this->hasMany('App\Models\question','question_status_id');
    }

    public function relStatusProcModel(){
        return $this->hasMany('App\Models\procModel','process_status_id');
    }
}
