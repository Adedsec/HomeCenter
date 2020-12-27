<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = ['estate_id', 'owner_id', 'customer_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estate()
    {
        return $this->hasOne(Estate::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function owner()
    {
        return $this->hasOne(Owner::class);
    }
}
