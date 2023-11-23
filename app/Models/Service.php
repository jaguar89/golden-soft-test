<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subCategory(){
        return $this->belongsTo(SubCategory::class , 'sub_cat_id');
    }

    public function technicians(){
        return $this->belongsToMany(Technician::class);
    }
}
