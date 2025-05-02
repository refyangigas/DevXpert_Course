<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $featured = Article::with('category')
            ->published()
            ->featured()
            ->latest('published_at')
            ->first();

        $articles = Article::with('category')
            ->published()
            ->latest('published_at')
            ->paginate(6);

        $categories = Category::withCount('articles')
            ->orderBy('name')
            ->get();

        return view('articles', compact('featured', 'articles', 'categories'));
    }

    public function show($slug)
    {
        $article = Article::with(['category', 'tags'])
            ->where('slug', $slug)
            ->published()
            ->firstOrFail();

        // Increment view count
        $article->increment('views');

        $relatedArticles = $article->relatedArticles();

        $popularArticles = Article::published()
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();

        $categories = Category::withCount('articles')
            ->orderBy('article_count', 'desc')
            ->take(5)
            ->get();

        $tags = Tag::has('articles')
            ->withCount('articles')
            ->orderBy('articles_count', 'desc')
            ->take(12)
            ->get();

        return view('article-detail', compact('article', 'relatedArticles', 'popularArticles', 'categories', 'tags'));
    }

    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $articles = Article::with('category')
            ->where('category_id', $category->id)
            ->published()
            ->latest('published_at')
            ->paginate(6);

        return view('articles', [
            'articles' => $articles,
            'featured' => null,
            'categories' => Category::withCount('articles')->orderBy('name')->get(),
            'currentCategory' => $category,
        ]);
    }

    public function byTag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        $articles = $tag->articles()
            ->with('category')
            ->published()
            ->latest('published_at')
            ->paginate(6);

        return view('articles', [
            'articles' => $articles,
            'featured' => null,
            'categories' => Category::withCount('articles')->orderBy('name')->get(),
            'currentTag' => $tag,
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $articles = Article::with('category')
            ->published()
            ->where('title', 'like', "%{$search}%")
            ->orWhere('content', 'like', "%{$search}%")
            ->orWhere('excerpt', 'like', "%{$search}%")
            ->latest('published_at')
            ->paginate(6);

        return view('articles', [
            'articles' => $articles,
            'featured' => null,
            'categories' => Category::withCount('articles')->orderBy('name')->get(),
            'search' => $search,
        ]);
    }
}
