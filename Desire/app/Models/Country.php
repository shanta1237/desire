<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status', 'description', 'destination_id'];
    public function destinations()
    {
        return $this->belongsTo('App\Models\Destination');
    }
}
