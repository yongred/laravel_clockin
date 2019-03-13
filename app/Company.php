<?php

namespace App;

use App\Address;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // entity_type_id for company object
    const ENTITY_TYPE_ID = 2;

    protected $table = 'companies';

    protected $fillable = [
        'name', 'company_code'
    ];

    public function employees()
    {
        return $this->hasMany(User::class, 'company_id');
    }
}
