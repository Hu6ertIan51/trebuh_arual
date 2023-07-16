<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Employer extends Model
{
    use HasFactory;
    protected $table = "employerdetails";
    protected $primaryKey = "id";
    protected $fillable = ['housetype','bathroomNo','bedroomNo']; 

    public function user(){
        return $this->belongsTo((User::class));
    }

}
