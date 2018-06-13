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
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    /** checks if user is admin */
    public function isAdmin()
    {
        return $this->type === self::ADMIN_TYPE; // this looks for type column in your users table
    }
    
    
    /** attributes of the User object */
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
    
}
