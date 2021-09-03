<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Carbon;
class Exam extends Model
{
    use HasFactory;
    function skill(){
        return $this->belongsTo(Skill::class);
    }

    function questions(){
        return $this->hasMany(Question::class);
    }

    function users(){
        return $this->belongsToMany(User::class);
    }

    function name(){
        if(App::getlocale()=='AR'){
            return json_decode($this->name)->ar;
        }else return json_decode($this->name)->en;

    }
    function desc(){
        if(App::getlocale()=='AR'){
            return json_decode($this->desc)->ar;
        }else return json_decode($this->desc)->en;

    }
    function date(){
        $d=Carbon::parse($this->created_at)->format('d M, Y');
        return $d;
    }
}
