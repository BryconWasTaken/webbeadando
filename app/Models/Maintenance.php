<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = ['device_id', 'description', 'scheduled_date', 'status'];
    use HasFactory;


    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}

