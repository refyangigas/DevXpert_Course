<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NavigationItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'navigation_category_id',
        'name',
        'slug',
        'route',
        'order',
        'is_active',
        'description',
        'icon'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relasi dengan NavigationCategory
    public function category(): BelongsTo
    {
        return $this->belongsTo(NavigationCategory::class, 'navigation_category_id');
    }

    // Scope untuk item yang aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk menampilkan secara berurutan
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
