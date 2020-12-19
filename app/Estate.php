<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $fillable = [
        'type',
        'user_id',
        'owner_id',
        'title',
        'description',
        'price',
        'rent_price',
        'usage',
        'area',
        'Address',
        'img_link',
        'build_date',
        'elevator',
        'anbari',
        'parking'
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
