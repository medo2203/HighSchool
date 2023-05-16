<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classing extends Model
{
    use HasFactory;

    protected $fillable=['user_id',"classe_id"];

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }

    public function students()
    {
        return $this->hasMany(User::class);
    }
}
