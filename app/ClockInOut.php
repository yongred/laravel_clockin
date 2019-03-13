<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ClockInOut extends Model
{
    protected $table = 'clock_in_outs';

    protected $fillable = [
        'clock_in', 'clock_out'
    ];

    public function employee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
