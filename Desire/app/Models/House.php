<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = ['name','aboutdesc','a1','a2','a3','a4','a5','a6','aphone','applynow','applynowques','applynowans','abroadfocus','abroadphoto','abroaddesc','career','careerphoto','careerdesc','test','testphoto','testdesc','env','envphoto','envdesc'];
}
