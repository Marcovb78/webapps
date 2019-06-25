<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['name'];
    protected $table = "categories";

    public function projects() 
    {
        return $this->belongsToMany('App\Models\Project', 'id');
    }
}