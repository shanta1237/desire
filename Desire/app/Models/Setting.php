<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'meta_description', 'meta_keywords', 'logo', 'favicon', 'header_address', 'header_email', 'header_phone', 'facebook', 'twitter', 'instagram', 'footer_address', 'footer_email', 'footer_phoneone', 'footer_phonetwo', 'footer_phonethree', 'footer_logo'];
}
