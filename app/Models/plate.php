<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plate extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','ingredients','IdCategory','IdChef'];

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
}
