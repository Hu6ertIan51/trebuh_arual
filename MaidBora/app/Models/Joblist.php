<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joblist extends Model
{
    protected $table = "job_post";
    protected $primaryKey = "jobID";
    protected $fillable = ['jobTitle','jobDescription','jobCategory','salary', 'employmentType', 'status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'jobrequest', 'user_id', 'joblist_id')
        ->withPivot('status')
        ->withTimestamps();
    }

    public function rate() // previously called ratings
{
    return $this->hasMany(Rating::class);
}
    
}

