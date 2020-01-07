<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $uploadedFile = $request->file('img_thumb');
        $filename = time().$uploadedFile->getClientOriginalName();
        $path = Storage::disk('my_files')->putFileAs(
            'articles',
            $uploadedFile,
            $filename
        );
        $article = $this->model_article->createArticle($request, $path);
        if ($article){
            session()->flash('save_success', 'Create new article successfully');
            return redirect()->route('list_article');
        }
        return $this->page_500();
    }
    public function edit($id){
        $categories = $this->model_category->getList(0);
        $albums = $this->model_album->getList();
        $article = $this->model_article->getArticleById($id);
        if($article == null){
            return $this->page_404();
        }
        $data = [
            'categories' => $categories,
            'albums' => $albums,
            'article' => $article,
        ];
        return view('admin.pages.articles.edit', $data);
    }
    public function update($id, Request $request){
        $article = $this->model_article->getArticleById($id);
        if($article == null){
            return $this->page_404();
        }
        $path = $article->img_thumb;
        if (!is_null($request->img_hidden)){
            $uploadedFile = $request->file('img_thumb');
            $filename = time().$uploadedFile->getClientOriginalName();
            $path = Storage::disk('my_files')->putFileAs(
                'articles',
                $uploadedFile,
                $filename
            );
        }

        $result = $this->model_article->updateArticle($request, $article, $path);
        if ($result){
            session()->flash('save_success', 'Update article successfully');
            return redirect()->route('list_article');
        }
        return $this->page_500();
    }

    public function index(){
        $lists = $this->model_article->getList();
        return view('admin.pages.articles.index', compact('lists'));
    }

    public function delete($id){
        $article = $this->model_article->getArticleById($id);
        if($article == null){
            return $this->page_404();
        }
        if ($this->model_article->deleteArticle($article)){
            session()->flash('save_success', 'Delete article successfully');
            return redirect()->route('list_article');
        }
        return $this->page_500();
    }
}
