<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function salary_slips()
    {
        return $this->hasMany(SalarySlip::class);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    public function getGenderAttribute($value)
    {
        switch ($value) {
            case 0:
                $status = 'Pria';
                break;

            case 1:
                $status = 'Perempuan';
                break;

            default:
                $status = 'Status not found.';
                break;
        }

        return $status;
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name . ' (' . $this->user->nip . ')';
    }
}
