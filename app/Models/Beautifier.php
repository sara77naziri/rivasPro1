<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beautifier extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function clinic()
    {
        return $this->hasOne('App\Models\Clinic');
    }
    public function speciality()
    {
        return $this->belongsTo('App\Models\speciality');
    }

    public function services()
    {
        return $this->hasMany('App\Models\Services');
    }


}
