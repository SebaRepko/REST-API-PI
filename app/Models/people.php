<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    protected $fillable = ['Imie','Nazwisko','Ulica','Miasto','Kraj','Nr telefonu'];
    use HasFactory;
}
