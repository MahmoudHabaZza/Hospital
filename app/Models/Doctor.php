<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Doctor extends Model implements TranslatableContract
{
    use HasFactory , Translatable;
    public $translatedAttributes = [
        'name' , 'appointments'
    ];
    protected $fillable = [
        'email',
        'password',
        'phone',
        'price',
        'section_id'
    ];
    
    public function image() {
        return $this->morphOne(Image::class,'imageable');
    }

}
