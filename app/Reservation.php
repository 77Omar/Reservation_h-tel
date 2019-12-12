<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $guarded = [];
    public function personne(){
        return $this->belongsTo("App\personne");
    }

    public function Chambre(){
        return $this->belongsTo("App\chambre");
    }
}
