<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function masterRate()
    {
        return $this->belongsTo(MasterRate::class, 'master_id');
    }
}
