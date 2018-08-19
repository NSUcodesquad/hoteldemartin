<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //Table name
    protected $table = 'posts';
    //Primary key
    public $primarykey = 'email';
    //Timestamps
    public $timestamps = true;
}
