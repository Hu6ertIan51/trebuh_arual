<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reported_employers extends Model
{
    use HasFactory;
    protected $table = "reported_employers";
    protected $primaryKey = "RW_ID";
    protected $fillable = ['RW_ID', 'ReporterId,', 'ReporteeId', 'Warning', 'comment', 'Reported_at'];

    public function ReporterId(){
        return $this->belongsTo(worker::class, 'Worker_ID');
    }

    public function ReporteeId(){
        return $this->belongsTo(employer::class, 'Employer_ID');
    }
}
