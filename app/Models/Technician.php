<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Technician extends Model
{
    use HasApiTokens , HasFactory;


    protected $guarded = [];

    public function services(){
        return $this->belongsToMany(Service::class);
    }
}
