<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'title', 'description', 'category_id', 'user_id'
    ];

    // Een project hoort bij een category
    public function category() 
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    // Een project hoort bij een user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
