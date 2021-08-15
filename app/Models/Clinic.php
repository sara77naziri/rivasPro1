<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    public function beautifier()
    {
        return $this->belongsTo(Beautifier::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
