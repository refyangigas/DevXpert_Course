<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NavigationCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'route',
        'order',
        'is_active',
        'has_dropdown'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'has_dropdown' => 'boolean',
    ];

    // Relasi dengan NavigationItem
    public function items(): HasMany
    {
        return $this->hasMany(NavigationItem::class)->orderBy('order');
    }

    // Scope untuk kategori yang aktif
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
