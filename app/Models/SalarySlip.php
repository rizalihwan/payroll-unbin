<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalarySlip extends Model
{
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function getStatusTransferAttribute()
    {
        return $this->status == 0 ? 'Not Yet Transferred' : 'Already Transferred';
    }
}
