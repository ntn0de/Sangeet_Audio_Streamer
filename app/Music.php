<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = [ 'tag' , 'Song_name' , 'Artist' , 'Album', 'count' ];
}
