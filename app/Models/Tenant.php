<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenant extends Model
{
    /** @use HasFactory<\Database\Factories\TenantFactory> */
    use HasFactory, HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function themes(): BelongsToMany
    {
        return $this->belongsToMany(Theme::class, 'tenant_themes')
            ->withPivot([
                'id',
                'purchased_at',
                'is_active',
            ])
            ->withTimestamps();
    }

    public function subscription(): HasMany{
        return $this->hasMany(Subscriptions::class);
    }
}
