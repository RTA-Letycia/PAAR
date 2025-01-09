<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcModel extends Model
{
    use HasFactory;
    protected $table='process';

    public function relUser(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function relProcModelStatus(){
        return $this->belongsTo('App\Models\status','process_status_id');
    }
}
