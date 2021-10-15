<?php

namespace App\Models;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
        'name',
        'active',
    ];
    use HasFactory;
    function skills(){
        return $this->hasMany(Skill::class);
    }
    function name($lang=null){
        // ASK
        if($lang!=null){
             $lang=$lang??App::getlocale();
             return json_decode($this->name)->$lang;
        }
        // ASK
        if(App::getlocale()=='AR'){
            return json_decode($this->name)->ar;
        }else return json_decode($this->name)->en;

    }
    function scopeActive($query){
        return $query->where('active',1);
    }
}
