<?php

namespace App;


use App\Models\Dislikes;
use App\Models\Reply;
//use Laravel\Passport\HasApiTokens;
use App\Models\UserActivity;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

        //HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function disscusion(){
      return $this->hasMany('App\Models\Disscusion');
    }

    /**
     * Activation of user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
//    public function activation()
//    {
//        return $this->hasOne('App\Models\Activation');
//    }

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function like()
    {
        return $this->hasOne(\App\Models\Like::class);
    }

    public function dislikes()
    {
        return $this->hasOne(Dislikes::class);
    }

    public function userActivity()
    {
        return $this->hasMany(UserActivity::class);
    }

    public function isAdmin()
    {
        return $this->id == 1;

    }

}
