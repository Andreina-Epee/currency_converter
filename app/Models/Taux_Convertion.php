<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taux_Convertion extends Model
{
    use HasFactory;
    protected $fillable = ['taux', 'devise1_id', 'devise2_id'];

    
}
