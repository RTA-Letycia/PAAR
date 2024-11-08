<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcModel extends Model
{
    use HasFactory;
    protected $table='processo';

    public function relUser(){
        return $this->belongsTo('App\Models\User','id_user');
    }
}
//para cada processo tem que ter um usuário
