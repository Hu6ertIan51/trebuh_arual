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

    public function worker(){
        return $this->belongsTo(worker::class);
    }
    public function employer(){
        return $this->hasOne(employer::class, 'roleid', 'RoleID');
    }
}
