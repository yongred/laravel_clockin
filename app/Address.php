<?php

namespace App;

use App\Company;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'street_address', 'city', 'state_id', 'country_id', 'postal_code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'entity_id')->where('entity_type_id', '=', User::ENTITY_TYPE_ID);
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'entity_id')->where('entity_type_id', '=', Company::ENTITY_TYPE_ID);
    }
}
