<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reported_workers extends Model
{
    use HasFactory;
    protected $table = 'reported_workers';
    protected $primaryKey = 'RW_ID';
    protected $fillable = ['reason'];
    

    // 1 Reported Worker belongs to one worker
    public function worker()
    {
        return $this->belongsTo(Worker::class,);
    }
}
