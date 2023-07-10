<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    use HasFactory;

    protected $table = "worker";
    protected $primaryKey = "WorkerID";
    protected $fillable = ['YearsExperienced','WorkType','WorkingHours','ExpectedSalary'];


    public function roles(){
        return $this->belongsTo(roles::class);
    }
}
