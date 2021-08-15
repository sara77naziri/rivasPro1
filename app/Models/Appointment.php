<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
protected $guarded=[];

    protected $appends=[
        'customerimg','customername'
    ];


    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function getCustomerimgAttribute()
    {
        return  asset($this->customer->user->image);
    }

    public function getCustomernameAttribute()
    {
        return $this->customer->user->name;
    }


}
