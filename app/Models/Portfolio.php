<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'details',
        'image',
        'category',
        'student_name',
        'batch',
        'is_featured',
        'order',
        'technologies',
        'demo_link',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'technologies' => 'array',
    ];

    // Generate slug dari title
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($portfolio) {
            if (empty($portfolio->slug)) {
                $portfolio->slug = Str::slug($portfolio->title);
            }
        });
    }

    // Mengubah nama kategori untuk tampilan
    public function getCategoryNameAttribute()
    {
        return match($this->category) {
            'web-design' => 'Web Design',
            'graphic-design' => 'Desain Grafis',
            'ui-ux' => 'UI/UX',
            'mobile-app' => 'Mobile App',
            'video' => 'Video & Animasi',
            default => $this->category,
        };
    }

    // Scope untuk portfolio yang disorot
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope untuk menampilkan secara berurutan
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')
                     ->orderBy('created_at', 'desc');
    }
}
