<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'my_profiles';
    protected $guarded = 'required';

}
