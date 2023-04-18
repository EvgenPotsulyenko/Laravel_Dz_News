<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMod extends Model
{
    protected $primaryKey='id';
    protected $table='News';
    protected $fillable=['Summary','Short_description','Full_text'];
}
