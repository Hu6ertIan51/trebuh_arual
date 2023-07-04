<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker_requests extends Model
{
    use HasFactory;

    protected $table = 'worker_requests';
    protected $primaryKey = ['ReqID'];
    protected $fillable =['RequesterID','RequesteeID','RequestType','RequestStatus','Requested_at','ReqID'];

    // 1 request to 1 worker
    public function worker()
    {
        return $this->belongsTo(Worker::class,'worker_ID');
    }

    
}
