<?php

namespace App\Models;

use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    use HasFactory;

    //properties of the model 
    protected $table = "Employer";
    protected $primaryKey = "EmployerID";
    protected $fillable = ['houseType','bedroomNo','bathroomNo'];

    //relationships ()many
    public function workers(){
        return $this->hasMany(Worker::class);
    }
    public function roles (){
        return $this->belongsTo(roles::class);
    }

    public function RolesDetail (){
        return $this->hasOne(roles::class, 'roleid', 'EmployerID');
    }
    
    
}
