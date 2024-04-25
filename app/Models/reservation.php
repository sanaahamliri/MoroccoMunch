<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'clientID',
        'plateID',
    ];

    public function clients(){
        return $this->belongsTo(Client::class, 'clientID');
    }

    public function plates(){
        return $this->belongsTo(plate::class, 'plateID');
    }

}
