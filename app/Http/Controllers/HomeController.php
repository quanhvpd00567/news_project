<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    private $categories;
    private $albums;
    private $images;
    private $model_category;
    private $model_article;
    private $model_album;
    private $model_image;
    private $datas;

    public function __construct()
    {
        $this->model_category = new Category();
        $this->model_article = new Article();
        $this->model_album = new Album();
        $this->model_image = new Image();
        $this->categories = $this->model_category->getList(0);
        $this->albums = $this->model_album->getList();
        $this->images = $this->model_image->getList(true);
        $this->datas = [
            'categories' => $this->categories,
            'albums' => $this->albums,
            'images' => $this->images,
        ];
    }

    public function index()
    {
        $private_date = [
            'articles' => $this->model_article->getList(true),
        ];

        $data = array_merge($this->datas, $private_date);
        return view('end_user.index', $data);
    }
    public function detail($id){
        $article = $this->model_article->getArticleById($id);

        if (is_null($article)){
            return abort(404);
        }

        $is_buy = Order::buy_success($article->album_id);
        $private_date = [
            'article' => $article,
        ];
        $data = array_merge($this->datas, $private_date);

        if ($article->album->is_free == 0 && !$is_buy){
            return view('end_user.confirm-buy', $data);
        }
        return view('end_user.detail-article', $data);
    }

    public function category($id){
        $category = $this->model_category->getCategoryById($id);
        if (is_null($category)){
            return abort(404);
        }

        $private_date = [
            'category_detail' => $category,
            'articles' => $this->model_article->getArticleByCategory($id),
        ];
        $data = array_merge($this->datas, $private_date);
        return view('end_user.category', $data);
    }

    public function album($id){
        $album = $this->model_album->getAlbumById($id);
        if (is_null($album)){
            return abort(404);
        }

        $private_date = [
            'album_detail' => $album,
            'articles' => $this->model_article->getArticleByAlbum($id),
        ];
        $data = array_merge($this->datas, $private_date);
        return view('end_user.album', $data);
    }

    public function confirm_buy(){
        $data = array_merge($this->datas);
        return view('end_user.confirm-buy', $data);
    }
}
