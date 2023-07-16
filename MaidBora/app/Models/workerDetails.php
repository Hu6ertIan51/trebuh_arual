<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workerDetails extends Model
{
    use HasFactory;
    protected $table = 'workerDetails';
    protected $primarykey = "id";
    protected $fillable = ['housetype', 'bathroomNo', 'duration'];

}

