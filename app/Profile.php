<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'gendar' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
}