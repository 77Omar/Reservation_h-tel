<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $guarded = [];
    public function chambres(){
        return $this->hasMany("App\Chambre");
}
}