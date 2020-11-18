<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $fillable = [

    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
