<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $guarded = [];
    public function personne(){
        return $this->belongsTo("App\personne");
    }
    public function Chambres(){
        return $this->hasMany("App\Chambre");
    }


public function parent(){
    return $this->belongsTo("App\Employer","parent_id","id");
}

public function children(){
    return $this->hasMany("App\Employer","parent_id","id");
}

}
