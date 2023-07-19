<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Employer;
use App\Models\Joblist;
use App\Models\JobRequest;
use App\Models\Rating;

class User extends Authenticatable
{
    
    const ADMIN_ROLE = 1;
    const EMPLOYER_ROLE = 2;
    const WORKER_ROLE = 3;

    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";
    protected $primarykey = "id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'gender',
        'phone',
        'email',
        'county',
        'subcounty',
        'town',
        'password',
        'bio',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function employer()
    {
        return $this->hasOne(Employer::class);
    }

    public function joblists(){
        return $this->belongsToMany(Joblist::class, 'jobrequest', 'user_id', 'joblist_id')
        ->withPivot('status')
        ->withTimestamps();
    }

    public function jobRequests()
    {
        return $this->hasMany(jobRequests::class, 'user_id');
                    
    }

    public function ratingsGiven()
    {
        return $this->hasMany(Rating::class, 'raterID');
    }

    public function ratingsReceived()
    {
        return $this->hasMany(Rating::class, 'ratedUser');
    }

}
/*
'email',
        'county',
        'subcounty',
        'town',
        'password',
        'bio'
*/