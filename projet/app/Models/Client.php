<?php

namespace App\Models;
use App\Models\Cour;
use App\Models\Prof;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    protected $fillable = ['nom','adress','email'];
    use HasFactory;

    public function profs(){
        return $this->belongsToMany(Prof::class)->withPivot('payement','reservation')->withTimestamps();
    }


    public function cours(){
        return $this->hasMany(Cour::class);
    }

}
