<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typechambre extends Model
{
    protected $table = 'typechambres';
    protected $guarded = [];
    public function chambre(){
        return $this->belongsTo("App\Chambre");
    }
}
