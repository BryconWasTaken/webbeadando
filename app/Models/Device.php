<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'erp_code',
        'type_id',
        'plant',
        'active',
        'history',
        'note',
    ];
    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(DeviceType::class, 'type_id');
    }
    public function worksheets(): HasMany
{
  return $this->hasMany(Worksheet::class);
}
public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
