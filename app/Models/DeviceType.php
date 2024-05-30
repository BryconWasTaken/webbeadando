<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DeviceType extends Model
{
    protected $fillable = ['name', 'note'];
    use HasFactory;
    public function devices(): HasMany
{
  return $this->hasMany(Device::class, 'type_id');
}
}
