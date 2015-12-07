<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = ['date_of_birth', 'religion', 'country', 'profile_picture', 'father_name', 'mother_name', 'present_address', 'permanent_address', 'career_objective', 'about_me', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
