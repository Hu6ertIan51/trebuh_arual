<?php

namespace App\Models;
use App\Models\Joblist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;
    protected $table = "jobrequest";
    protected $primaryKey = "id";
    protected $fillable = ['user_id','joblist_id','status'];

    public function joblist()
    {
        return $this->belongsTo(Joblist::class, 'joblist_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
