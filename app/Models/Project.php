<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'title', 'description', 'category_id', 'user_id'
    ];

    public function category() 
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
