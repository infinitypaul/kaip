<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function referral() {
        return $this->belongsToMany('App\Referral');
    }

    public function getNameAttribute($value)
    {
        return ucwords($this->firstname . ' ' . $this->lastname);
    }

    public function getWalletAttribute($value)
    {
        return number_format($value);
    }

    public function level()
    {
        return $this->hasOne('App\Level');
    }
}
