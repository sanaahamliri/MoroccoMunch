<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    use HasFactory;


    protected $fillable = ['content','plate_id','client_id'];


    public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }
    public function plate()
    {
        return $this->belongsTo(Plate::class,'plate_id');
    }
}
