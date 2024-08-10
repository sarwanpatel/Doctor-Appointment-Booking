<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

      protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'd_name',
        'slot',
        'date'
    ];

    public function slot()
    {
        return $this->belongsTo(Slot::class, 'slot_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
