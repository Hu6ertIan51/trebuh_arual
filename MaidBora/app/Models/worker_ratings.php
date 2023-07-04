<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker_ratings extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $primaryKey = 'id';
    protected $fillable = ['rating','raterID','worker_ID','created_at'];
   

    // many to one worker
    public function worker()
    {
        return $this->belongsTo(Worker::class,'worker_ID');
    }
}
