<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    protected $table = "articles";
    public function user(){
        return $this-> belongsTo('app\Models\user', 'user_id', 'id');
    }
    public function album(){
        return $this->belongsTo('app\Models\album', 'album_id', 'id');
    }
    public function category(){
        return $this->belongsTo('app\Models\category', 'category_id', 'id');
    }
    public function createArticle($request, $path_file){
        $this->title = $request->post('title');
        $this->content = $request->post('content');
        $this->img_thumb = $path_file;
        $this->category_id = $request->post('category_id');
        $this->album_id = $request->post('album_id');
        $this->user_id = Auth::user()->id;

        $date = date('Y-m-d', strtotime($request->post('date_public')));
        $this->date_public = $date;
        $this->is_delete = 0;
       return $this->save();
    }
    public function getArticleById($id){
        return $this->find($id);
    }
    public function updateArticle($request, $article, $path_img){
        $article->title = $request->post('title');
        $article->content = $request->post('content');

        if (!is_null($request->post('img_hidden'))){
            $article->img_thumb = $path_img ;
        }

        $article->category_id = $request->post('category_id');
        $article->album_id = $request->post('album_id');
        $date = date('Y-m-d', strtotime($request->post('date_public')));
        $article->date_public = $date;
        $article->updated_at = Carbon::now();
        return $article->save();
    }
    public function getList($isPageUser = false){
        $setting = Setting::getSetting();
        $perpage = $setting->p_article;
        if ($isPageUser){
            $perpage = 20;
        }
        return self::where('is_delete', 0)->orderBy('id', 'desc')->paginate($perpage);
    }

    public function deleteArticle($article){
        $article->is_delete = 1;
        return $article->save();
    }

    public function getArticleByCategory($id){
        return self::where('is_delete', 0)->where('category_id', $id)->orderBy('id', 'desc')->paginate(20);
    }

    public function getArticleByAlbum($id){
        return self::where('is_delete', 0)->where('album_id', $id)->orderBy('id', 'desc')->paginate(20);
    }
}
