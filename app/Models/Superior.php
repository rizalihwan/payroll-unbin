<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superior extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
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
}
