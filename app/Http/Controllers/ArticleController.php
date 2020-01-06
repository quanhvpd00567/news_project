<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    private $model_article;
    private $model_category;
    private $model_album;
    public function __construct()
    {
        $this->model_article = new Article();
        $this->model_category = new Category();
        $this->model_album = new Album();
    }
    public function create_new(){
        $categories = $this->model_category->getList(0);
        $albums = $this->model_album->getList();
        $data = [
            'categories' => $categories,
            'albums' => $albums,
        ];
        return view('admin.pages.articles.new', $data);
    }
    public function create(Request $request){
        dd($request);
//        $categories = $this->model_category->getList(0);
//        $article = $this->model_article->createArticle($request);
//        if($article){
//            return redirect()->route('list_article');
//        }
//        $data = [
//            'article' => $article,
//            'categories' => $categories,
//        ];
//        return redirect()->route('get_new_view_article', $data);
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
