<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = "Users";
    protected $primaryKey = "UserID";
    protected $fillable = ['UserId', 'First name', 'Last name', 'Username', 'Gender', 'phone', 'email', 'IDNumber', 'TownID', 'RoleID'];


}
