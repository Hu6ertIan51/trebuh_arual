<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_listing extends Model
{
    use HasFactory;
    protected $table = "job_listing";
    protected $primaryKey = "jobID";
    protected $fillable = ['job_name', 'job_description'];
    
    public function employer(){
        return $this->belongsTo(employer::class);
    }
    
    
}
