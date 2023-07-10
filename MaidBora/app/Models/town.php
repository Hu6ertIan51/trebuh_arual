<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class town extends Model
{
    use HasFactory;
    protected $table = "town";
    protected $primaryKey = "townID";
    protected $fillable = ['Name', 'SubId','townId'];

    public function subcounty(){
        return $this->belongsTo(subcounty::class, 'Sub_id');
    }

    public function employer(){
        return $this->hasMany(employer::class);
    }

    public function worker(){
        return $this->hasMany(worker::class);
    }
    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
