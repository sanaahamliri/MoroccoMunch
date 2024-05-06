<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends User
{
    use HasFactory;
    protected $fillable = ['status'];

    public function user()
    {
        return $this->belongsTo(User::class,'IdUser');
    }


    public function reservationClient(){
        return $this->hasMany(reservation::class, 'clientID');
    }

    public function comment()
    {
        return $this->hasMany(Commentaire::class,'client_id');

    }
}