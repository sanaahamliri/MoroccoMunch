<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plate extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status', 'description', 'ingredients', 'IdCategory', 'IdChef'];

    public function categories()
    {
        return $this->belongsTo(category::class, 'IdCategory');
    }

    public function chefs()
    {
        return $this->belongsTo(chef::class, 'IdChef');
    }


    public function images()
    {
        return $this->morphMany(image::class, 'imageable');
    }

    public function ingredients()
    {
        return $this->belongsToMany(ingredient::class, "ingredients_plates", 'IdPlate', 'IdIngredients');
    }


    public function reservationPlate(){
        return $this->hasMany(reservation::class, 'PlateID');
    }

    public function comments()
    {
        return $this->hasMany(commentaire::class,'plate_id');
    }
}

