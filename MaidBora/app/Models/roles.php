<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    protected $table = "roles";
    protected $primaryKey = "RoleID";
    protected $fillable = ['roleID','roleType'];

    public function worker()
    {
        return $this->hasOne(Worker::class);
    }

    public function employer()
    {
        return $this->hasOne(Employer::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
