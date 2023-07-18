<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'userdetails';
    protected $primarykey = "id";
    protected $fillable = ['firstname']; 

    public function receivedRatings()
{
    return $this->hasMany(Rating::class, 'rated_user_id');
}

public function givenRatings()
{
    return $this->hasMany(Rating::class, 'rater_id');
}
}
