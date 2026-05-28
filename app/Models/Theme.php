<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Theme extends Model
{
    /** @use HasFactory<\Database\Factories\ThemeFactory> */
    use HasFactory, HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $guarded = ['id'];

    public function themeCategory(): BelongsTo{
        return $this->belongsTo(ThemeCategory::class);
    }

    public function tenants(): BelongsToMany
    {
        return $this->belongsToMany(Tenant::class, 'tenant_themes')
        ->withPivot([
            'id',
            'purchased_at',
            'is_active',
        ])
        ->withTimestamps();
    }
}
