<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'image';

    protected $fillable = ['img_title','image','img_body'];
}
