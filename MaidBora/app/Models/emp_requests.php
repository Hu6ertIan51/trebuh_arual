<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_requests extends Model
{
    use HasFactory;
    protected $table = "employer_requests";
    protected $primaryKey = "Req_ID";
    protected $fillable = ['ReqID', 'RequesterID', 'RequesteeID', 'RequestType', 'RequestType', 'RequestStatus', 'Requested_at'];

    public function RequesterID(){
        return $this->belongsTo(worker::class, 'Worker_ID');
    }

    public function RequesteeID(){
        return $this->belongsTo(employer::class, 'Employer_ID');
    }
}
