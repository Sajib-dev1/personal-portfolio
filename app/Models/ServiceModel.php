<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;

    function rel_to_service(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
