<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    use HasFactory;

    protected $table = "worker";
    protected $primaryKey = "Worker_ID";
    protected $fillable = ['Worker_ID','name','emailAddress','County','Town','Address','Age','DoB','IDNumber','YearsExperienced','WorkType','WorkingHours','ExpectedSalary','Password'];

    //belongs to (one to one relationship)
    public function employer(){
        return $this->belongsTo(employer::class,'Employer_ID');
    } 

    //1 worker many requests
    public function requests()
    {
        return $this->hasMany(worker_Requests::class,'reqID');
    }

    //1 worker many ratings
    public function ratings()
    {
        return $this->hasMany(worker_Ratings::class,'id');
    }

    
    //1 worker many reports 
    public function reportedWorkers()
    {
        return $this->hasMany(reported_workers::class);
    }
}
