<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $fillable = [
        'name',
        'father-name',
        'email',
        'phone_number',
        'national_code',
        'birth_date',
        'address',
        'post_code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
