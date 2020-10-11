<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'my_profiles';
    protected $guarded = array('id');
    protected $fillable = ['name','age','finalEducation','annualIncome','height','bodyType','birthPlace','holiday','bloodType','profession',];

    public static $rules = array(
        'name' => 'required',
        'age' => 'integer|min:1|max:100',
        'annualIncome' => '|min:0|max:2000',
        'profession' => 'required'
    );
}
