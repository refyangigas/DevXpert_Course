<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'position',
        'rating',
        'content',
        'is_featured',
        'order',
        'status',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'rating' => 'integer',
    ];

    // Scope for active testimonials
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Scope for featured testimonials
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Ordered by the order field, then by created_at if order is null
    public function scopeOrdered($query)
    {
        // Perbaikan untuk MariaDB yang tidak mendukung ISNULL seperti MySQL
        return $query->orderBy('order', 'asc')
                    ->orderBy('created_at', 'desc');
    }
}
