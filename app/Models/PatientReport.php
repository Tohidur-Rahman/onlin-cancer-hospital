<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id','r_image',
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    
}
