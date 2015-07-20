<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    protected $table = 'i_articles';

    protected $fillable = [
        'title',
        'author',
        'content',
        'source',
        'category'
    ];

    /**
     * Most liked posts
     */
    public static function mostLiked()
    {
        $article = parent::orderBy('like','desc')->first();

        return $article;
    }

    /**
     * Most commented posts
     */
    public static function mostCommented()
    {
        $article = DB::table('i_articles as a')
            ->select(
                [
                    'a.id',
                    'a.title',
                    'a.content',
                    'a.author',
                    'a.published_at',
                    DB::raw('count(b.id) as ct'),
                    'b.referer_article as article_id'
                ]
            )
            ->leftJoin('i_comments as b', 'a.id', '=', 'b.referer_article')
            ->groupBy('article_id')
            ->orderBy('ct', 'desc')
            ->first();

        return $article;
    }

    /**
     * Recent posts
     * @param int $n How many post to show
     */
    public static function recent($n = 5)
    {
        $articles = parent::orderBy('published_at', 'desc')
            ->take($n)
            ->get();

        return $articles;
    }

    public static function comments($n)
    {
        $comments = DB::table('i_comments as a')
            ->select(
                [
                    'a.id',
                    'a.body',
                    'a.written_by',
                    'a.referer_article',
                    'a.created_at',
                    DB::raw('b.title as article_title')
                ]
            )
            ->leftJoin('i_articles as b', 'b.id', '=', 'a.referer_article')
            ->orderBy('a.created_at', 'desc')
            ->take($n)
            ->get();

        return $comments;
    }
}