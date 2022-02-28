<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'photo', 'slug', 'status', 'description', 'user_id', 'cat_id'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function blogcategory()
    {
        return $this->belongsTo('App\Models\Blogcategory');
    }
}
