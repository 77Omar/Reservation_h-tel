<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $guarded = [];
    public function personne(){
        return $this->belongsTo("App\personne");
    }
}
