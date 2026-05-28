<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscriptions extends Model
{
    /** @use HasFactory<\Database\Factories\SubscriptionsFactory> */
    use HasFactory, HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $guarded = ['id'];

    public function tenant(): BelongsTo{
        return $this->belongsTo(Tenant::class);
    }
}
