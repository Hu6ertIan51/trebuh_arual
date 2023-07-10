<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_report extends Model
{
    use HasFactory;
    protected $table = "user_report";
    protected $primaryKey = "ReportID";
    protected $fillable = ['UserID','ReportedUser','Reason','Description'];

    public function users(){
        return $this->hasMany(users::class);
    }
}
