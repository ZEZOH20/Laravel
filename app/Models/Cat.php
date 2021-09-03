<?php

namespace App\Models;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    function skills(){
        return $this->hasMany(Skill::class);
    }
    function name(){
        if(App::getlocale()=='AR'){
            return json_decode($this->name)->ar;
        }else return json_decode($this->name)->en;

    }
}
