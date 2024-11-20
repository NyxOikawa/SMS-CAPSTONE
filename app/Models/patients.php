<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory; 
    protected $table = 'patients'; 
    protected $primaryKey = 'id';
    protected $fillable = ['id','lastname','firstname','middlename','suffix','gender','profile_pic','birthday','age_in_months','height','weight','wfa', 'hfa', 'wfl_h', 'parent_id','district_id','age','created_at','updated_at'];

    public function parents()
    {
        return $this->belongsTo(parents::class, 'parent_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function district()
    {
        return $this->belongsTo(Districts::class, 'district_id');
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->birthday)->diffInMonths(Carbon::now());
    }
    
    
}
