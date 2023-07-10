<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcounty extends Model
{
    use HasFactory;
    protected $table = "subcounty";
    protected $primaryKey = "SubId";
    protected $fillable = ['Name','countyId','SubId'];

    public function town(){
        return $this->hasMany(town::class);
    }
    public function county(){
        return $this->belongsTo (county::class);
    }
}
