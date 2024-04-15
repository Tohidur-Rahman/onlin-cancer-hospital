<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\BillSystem;
use App\Models\PatientReport;
use App\Models\PatientActivites;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cancer_id',
        'doctor_id',
        'first_name',
        'last_name',
        'gender',
        'age',
        'blood',
        'number',
        'image',
        'address',
        'description',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function patient_report(){
        return $this->hasMany(PatientReport::class);
    }
    public function patient_activities(){
        return $this->hasOne(PatientActivites::class);
    }
    public function cancer(){
        return $this->belongsTo(CancerType::class);
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function prescription(){
        return $this->hasMany(Prescription::class);
    }
    public function patient_bill(){
        return $this->hasMany(BillSystem::class);
    }
}
