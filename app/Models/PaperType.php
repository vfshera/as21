<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperType extends Model
{
    use HasFactory;

    protected $fillable = ['type_name','rate','active'];


    public function scopeActive($query){
        return $query->where('active' , 1);
    }

}
