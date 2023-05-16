<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';
   protected $fillable = ['NameClass','module1','module2','module3'];


   public function students()
{
    return $this->belongsToMany(User::class);
}

}

