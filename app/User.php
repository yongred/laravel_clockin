<?php

namespace App;

use App\Company;
use App\Address;
use App\ClockInOut;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public const ENTITY_TYPE_ID = 1;

    public const ROLE_EMPLOYEE_ID = 1;
    public const ROLE_MANAGER_ID = 2;
    public const ROLE_ADMIN_ID = 3;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function clockInOuts()
    {
        return $this->hasMany(ClockInOut::class, 'user_id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'entity_id')->where('entity_type_id', '=', self::ENTITY_TYPE_ID);
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function subEmployees()
    {
        return $this->hasMany(self::class, 'manager_id');
    }

    public function manager()
    {
        return $this->belongsTo(self::class, 'manager_id');
    }

}
