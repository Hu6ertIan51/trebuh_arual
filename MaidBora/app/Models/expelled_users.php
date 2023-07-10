<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expelled_users extends Model
{
    use HasFactory;
    protected $table = "expelled_users";
    protected $primaryKey = "ExpelledID";
    protected $fillable = ['UserID','Reason'];

    


}