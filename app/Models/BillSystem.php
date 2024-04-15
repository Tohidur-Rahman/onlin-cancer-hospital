<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BillSystem extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'tn_id',
        'pay_no',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
