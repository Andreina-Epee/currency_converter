<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devise extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function devise1() {
        return $this->belongsToMany(Devise::class, 'taux_convertion', 'devise2_id');
    }
    public function devise2() {
        return $this->belongsToMany(Devise::class, 'taux_convertion', 'devise1_id');
    }
}
