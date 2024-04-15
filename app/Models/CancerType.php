<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CancerType extends Model
{
    use HasFactory;
    protected $fillable = [
        'disease',
    ];
    public function patient(){
        return $this->hasMany(Patient::class);
    }
    public function doctor(){
        return $this->hasMany(Doctor::class);
    }
}
