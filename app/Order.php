<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
