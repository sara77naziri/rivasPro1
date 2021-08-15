<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function appointment()
    {
        return $this->belongsTo('App\Models\Appointment');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }


    public function beautifier()
    {
        return $this->belongsTo('App\Models\Beautifier');
    }
}
