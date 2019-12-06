<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personne extends Model
{
    protected $guarded = [];
    public function Reservations(){
        return $this->hasMany("App\Reservation");
    }

    public function Employer(){
        return $this->belongsTo("App\Employer");
    }
}
