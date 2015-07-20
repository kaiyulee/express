<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Log;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * display articles
     */
    public function all()
    {
        $articles = Article::orderBy('published_at', 'desc')
            ->simplePaginate(7);

        return view('backend.articles', ['articles' => $articles, 'load_js' => 'backend/article.list']);
    }
    /**
     * show article-create page.
     */
    public function create()
    {
        $cats = array();
        $categories = Category::all()->toArray();
        // dump($categories);
        foreach ($categories as $key => $value) {
            $cats[$value['id']] = $value['name'];
        }
        return view('backend.article_create', ['load_js' => 'backend/article.create', 'categories' => $cats]);
    }

    /**
     * do add article data to database.
     */
    public function store(Request $request)
    {
        $article = new Article;
        $input = $request->all();

        if ($request->hasFile('featured_img')) {
            $featured_img = $request->file('featured_img');
            if ($featured_img->isValid()) {
                $ext = '.' . $featured_img->getClientOriginalExtension();

                $unique_name = function(){
                    return date('Y_m_d_his_') . strtoupper(uniqid());
                };

                $new_name = $unique_name() . $ext;

                try {
                    $featured_img->move(storage_path() . '/app/img/', $new_name);
                } catch(FileException $e){
                    Log::error($e->getMessage());
                    return false;
                }
            }
        }
        
        $article->title = $input['title'];
        $article->author = $input['author'];
        $article->content = $input['content'];
        $article->source = $input['source'];
        $article->category = $input['category'];
        $article->published_at = date('Y-m-d H:i:s', strtotime($input['published_at']));
        $result = $article->save();

        if ($result) {
            return $article->id;
        } else {
            if (isset($featured_img)) {
                unlink(storage_path() . '/app/img/' . $new_name);
            }
        }

        return $result;
    }

    /**
     * do delete action.
     *
     * @param $id
     *
     * @return bool 1 on true, 0 on null
     */
    public function del($id, Request $request)
    {
        $article = Article::find($id);
        $is_del = $article->delete();
        return $is_del ? 1 : 0;
    }

    /**
     * show the form for editing the specified resource.
     *
     * @param $id
     *
     * @return string
     */
    public function edit($id)
    {
        $cats = array();
        $users = array();
        $categories = Category::all()->toArray();
        $u = User::all()->toArray();
        foreach ($categories as $key => $value) {
            $cats[$value['id']] = $value['name'];
        }
        foreach ($u as $key => $value) {
            $users[$value['id']] = $value['username'];
        }
        $article = Article::find($id);
        return view('backend.article_edit', [
            'categories' => $cats,
            'users' => $users,
            'article' => $article,
            'load_js' => 'backend/article.edit',
            'load_css' => ''
        ]);
    }

    /**
     * do update action.
     *
     * @param $data
     *
     * @return string
     */
    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $input = $request->all();

        if ($request->hasFile('featured_img')) {
            $featured_img = $request->file('featured_img');
            if ($featured_img->isValid()) {
                $ext = '.' . $featured_img->getClientOriginalExtension();

                $unique_name = function(){
                    return date('Y_m_d_his_') . strtoupper(uniqid());
                };

                $new_name = $unique_name() . $ext;

                try {
                    $featured_img->move(storage_path() . '/app/img/', $new_name);
                } catch(FileException $e){
                    Log::error($e->getMessage());
                    return false;
                }
            }
        }
        
        $article->title = $input['title'];
        $article->author = $input['author'];
        $article->content = $input['content'];
        $article->source = $input['source'];
        $article->category = $input['category'];
        $article->published_at = date('Y-m-d H:i:s', strtotime($input['published_at']));
        $result = $article->save();

        if ($result) {
            return $article->id;
        } else {
            if (isset($featured_img)) {
                unlink(storage_path() . '/app/img/' . $new_name);
            }
        }

        return $result;
    }
}
