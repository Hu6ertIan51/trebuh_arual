<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_ratings extends Model
{
    use HasFactory;

    protected $table = 'emp_ratings';
    protected $primaryKey = 'id';
    protected $fillable = ['rating','rated_at','Emp_ID','raterID','id'];
    

    // many ratings belongs to one employer
    public function employer()
    {
        return $this->belongsTo(Employer::class,'employer_ID');
    }
}
