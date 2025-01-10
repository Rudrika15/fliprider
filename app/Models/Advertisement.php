<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function adPlacement()
    {
        return $this->belongsTo(AdPlacement::class, 'placement_id');
    }
}
