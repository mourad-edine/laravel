<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cour extends Model
{
    use HasFactory;

    protected $fillable = ['client_id','prix_total','dure','nom_prof'];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
