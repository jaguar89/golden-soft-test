<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mainCategory(){
        return $this->belongsTo(MainCategory::class , 'main_cat_id');
    }

    public function services(){
        return $this->hasMany(Service::class);
    }
}
