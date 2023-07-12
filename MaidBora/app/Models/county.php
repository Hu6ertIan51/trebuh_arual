<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class county extends Model
{
    use HasFactory;
    protected $table = "county";
    protected $primaryKey = "CountyID";
    protected $fillable = [ 'Name'];

    public function subcounty(){
      return $this->hasMany(subcounty::class);
    }

    public function town(){
        return $this->hasMany(town::class);
    }
}
