<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVaccineHospital extends Model
{
    use HasFactory;

    protected $table = "user_vaccine_hospitals";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }

    public function hospital()
    {
        return $this->belongsTo(User::class);
    }

}
