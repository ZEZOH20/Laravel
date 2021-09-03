<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;
use PHPUnit\Framework\Constraint\Count;

class Skill extends Model
{
    use HasFactory;
    function cat(){
        return $this->belongsTo(Cat::class);
    }

    function exams(){
        return $this->hasMany(exam::class);
    }
    function name(){
        if(App::getlocale()=='AR'){
            return json_decode($this->name)->ar;
        }else return json_decode($this->name)->en;

    }
    function date(){
        $d=Carbon::parse($this->created_at)->format('d M, Y');
        return $d;
    }

    function getStudentCount(){
        $studentNum=0;
        foreach($this->exams as $exam){
            $studentNum+=$exam->users()->count();
        }
        return $studentNum;
    }
}
