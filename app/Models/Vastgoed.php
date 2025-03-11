<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vastgoed extends Model
{
    use HasFactory;
    protected $table = 'vastgoederen';
    protected $fillable = ['titel', 'omschrijving', 'type', 'prijs', 'locatie'];
}