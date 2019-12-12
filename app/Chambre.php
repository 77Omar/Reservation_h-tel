<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $table = 'chambres';
    protected $guarded = [];
    public function Hotel(){
        return $this->belongsTo("App\Hotel");
    }

    public function Employers(){
        return $this->hasMany("App\Employer");
    }

    public function Reservations(){
        return $this->hasMany("App\Reservation");
    }


}
