<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\CancerType;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cancer_id',
        'first_name',
        'last_name',
        'gender',
        'birth',
        'number',
        'image',
        'address',
        'degree',
        'specialist',
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


    public function patient(){
        return $this->hasMany(Patient::class);
    }
    public function cancer(){
        return $this->belongsTo(CancerType::class);
    }
}
