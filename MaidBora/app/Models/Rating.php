<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Joblist;

class Rating extends Model
{
    use HasFactory;
    protected $table = "ratings";
    protected $primarykey = "rateID";
    protected $fillable = ['id','raterId','ratedUser','joblist_id', 'rating', 'review'];

    public function joblist()
    {
        return $this->belongsTo(Joblist::class, 'joblist_id');
    }

    public function rater()
    {
        return $this->belongsTo(User::class, 'raterID');
    }

    public function ratedUser()
    {
        return $this->belongsTo(User::class, 'ratedUser');
    }
}
