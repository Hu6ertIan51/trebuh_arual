<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class requests extends Model
{
    use HasFactory;
    protected $table = "requests";
    protected $primaryKey = "requestID";
    protected $fillable = ['status'];
    
    public function employer(){
        return $this->belongsTo(employer::class);
    }
    

}
/*class Status extends Model
{
    const PENDING = 0;
    const ACCEPTED = 1;
    const DENIED = 2;
}*/

