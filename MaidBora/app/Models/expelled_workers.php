<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expelled_workers extends Model
{
    use HasFactory;
    protected $table = 'expelled_workers';
    protected $primaryKey = 'EW_ID';
    protected $fillable = ['reason','Worker_ID','Deleted_at','EW_ID'];
    

    // 1 Expelled Worker belongs to one worker
    public function worker()
    {
        return $this->belongsTo(Worker::class, 'worker_ID');
    }
}
