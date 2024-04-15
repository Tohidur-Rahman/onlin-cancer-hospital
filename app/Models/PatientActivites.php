<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientActivites extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'heart_rate',
        'fever',
        'glucose',
        'upperblood',
        'lowerblood',
        'bloodcount',
        'weight',
        'height',
        'smoking',
        'lungs',
        'stomach',
        'liver',
        'heart',
        'brain',
        'oxygen',
        'carbon',
        'hydrogen',
        'nitrogen',
        'calcium',
        'other',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
