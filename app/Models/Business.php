<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'city_id',
    ];
    // ------------------------------------ Accessors ------------------------------------
    public function getCityNameAttribute()
    {
        if($city=$this->city)
            return $city->getAttribute('full_name');
        return '-';
    }
    // ------------------------------------ Relationships --------------------------------
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
