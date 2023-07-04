<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expelled_employers extends Model
{
    use HasFactory;

    protected $table = 'expelled_employers';
    protected $primaryKey = 'EP_ID';
    protected $fillable = ['Reason','Deleted_at','EP_ID'];
    

    // 1 Expelled Employer belongs to one employer
    public function employer()
    {
        return $this->belongsTo(Employer::class, 'Employer_ID');
    }
    
}
