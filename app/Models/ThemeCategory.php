<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ThemeCategory extends Model
{
    /** @use HasFactory<\Database\Factories\ThemeCategoryFactory> */
    use HasFactory, HasUlids;

    protected $keyType = 'string';
    public $incrementing = false;
    
    protected $guarded = ['id'];

    public function theme(): HasMany{
        return $this->hasMany(Theme::class);
    }
}
