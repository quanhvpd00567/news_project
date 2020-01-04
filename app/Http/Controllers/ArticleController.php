<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    private $model_article;
    public function __construct()
    {
        $this->model_article = new Article();
    }
    public function create_new(){
        return view('admin.pages.articles.new');
    }
    public function create(Request $request){
        $article = $this->model_article->createArticle($request);
        if($article){
            return redirect()->route('list_article');
        }
        return redirect()->route('get_new_view_article',compact('article'));
    }
    public function edit($id){
        $article = $this->model_article->getArticleById($id);
        if($article == null){
            return abort(404);
        }
        return view('admin.pages.articles.edit', compact('article'));
    }
    public function update($id, Request $request){
        $article = $this->model_article->getArticleById($id);
        if($article == null){
            return abort(404);
        }

        $result = $this->model_article->updateArticle($request, $article);
        if ($result){

            return redirect()->route('list_article');
        }
        return redirect()->route('get_view_edit_article', ['id', $id]);
    }
    public function index(){
        $lists = $this->model_article->getList();
        return view('admin.pages.articles.index', compact('lists'));
    }
}
