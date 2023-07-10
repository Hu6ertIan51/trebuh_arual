<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_ratings extends Model
{
    use HasFactory;
    protected $table = "user_ratings";
    protected $primaryKey = "RatingID";
    protected $fillable = ['UserID','RatedUserID','Rating','review_text','UserID'];

    public function users(){
        return $this->hasMany(users::class);
    }
}
