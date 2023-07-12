<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = "UserId";
    protected $fillable = [ 'firstname', 'lastname', 'username', 'gender', 'phone', 'email', 'IDNumber', 'county', 'subcounty', 'town', 'password', 'confpassword', 'bio'];

    public function roles(){
        return $this->hasOne(roles::class);
    }

    public function userDetail(){
        return $this->hasOne()
    }
}
