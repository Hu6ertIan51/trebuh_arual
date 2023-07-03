<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    use HasFactory;
    protected $table = "employer";
    protected $primaryKey = "Employer_ID";
    protected $fillable = ['Name', 'EmailAddress', 'County', 'Town', 'Housetype', 'NoOfBathrooms', 'NoOfBedrooms', 'Age', 'DoB', 'Address', 'IDNumber', 'Password'];

    public function worker_requests(){
        return $this->hasMany(worker_requests::class);
    }

    public function worker(){
        return $this->hasMany(worker::class, 'Worker_ID');
    }

    public function Ratings(){
        return $this->hasMany(emp_ratings::class, 'raterID' );
    } 

    public function Reports(){
        return $this->hasMany(reported_employers::class, 'ReporterId');
    }

    public function Expulsion(){
        return $this->hasOne(expelled_employers::class, 'EP_ID');
    }
}