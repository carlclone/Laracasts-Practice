<?php
/**
 * Created by PhpStorm.
 * User: sierra
 * Date: 20/02/2017
 * Time: 10:09 AM
 */

interface Articles
{
    public function all();
}

class CacheableArticles implements Articles
{
    protected $articles;

    public function __construct($articles)
    {
        $this->articles = $articles;
    }

    public function all()
    {
        return Cache::remember('articles.all',60*60,function() {
           return $this->articles->all();
        });
    }
}

class EloquentArticles implements Articles
{
    public function al()
    {
        return App\Article::all();
    }
}

App::bind('Articles', function() {
    return new CacheableArticles(new EloquentArticles);
});

Route::get('/', function(Articles $articles) {
    dd($articles);

    //$articles = new CacheableArticles(new Articles);
    // return $articles->all();
});