<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'country_id',
        'region_id',
    ];
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['full_name'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps=false;
    // ------------------------------------ Accessors ------------------------------------
    public function getFullNameAttribute()
    {
        $name=$this->getAttribute('name');
        if($region=$this->region)
            $name.=', '.$region->getAttribute('full_name');
        elseif($country=$this->country)
            $name.=', '.$country->getAttribute('name');
        return $name;
    }
    // ------------------------------------ Relationships --------------------------------
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
