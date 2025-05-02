<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'category_id',
        'author_name',
        'author_image',
        'author_title',
        'reading_time',
        'published_at',
        'featured',
        'views'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'featured' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function relatedArticles()
    {
        // Articles in the same category
        return Article::where('id', '!=', $this->id)
            ->where('category_id', $this->category_id)
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->take(2)
            ->get();
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function getFormattedPublishedDateAttribute()
    {
        return $this->published_at?->format('d F Y');
    }

    public function getReadingTimeInMinutesAttribute()
    {
        return $this->reading_time . ' menit membaca';
    }
}
