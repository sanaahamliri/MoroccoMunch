<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chef extends Model
{
    use HasFactory;

    protected $fillable = ['status','bio','years_of_experience','age','city'];

    public function user()
    {
        return $this->belongsTo(User::class,'IdUser');

    }


    public function plates()
    {
        return $this->hasMany(plate::class,'IdChef');
    }
}
