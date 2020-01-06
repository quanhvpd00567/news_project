<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    public function user(){
        return $this -> belongsTo('app\Models\user', 'user_id', 'id');
    }
    public function album(){
        return $this->hasMany('app\Models\album', 'album_id', 'id');
    }
    public function category(){
        return $this->hasMany('app\Models\category', 'category_id', 'id');
    }
    public function createArticle($request){
        $this->title = $request->post('title');
        $this->content = $request->post('content');
        $this->img_thumb = $request->post('img_thumb');
        $this->category_id = $request->post('category_id');
        $this->album_id = $request->post('album_id');
        $this->user_id = $request->post('user_id');
        $this->date_public = $request->post('date_public');
        $this->is_delete = $request->post('is_delete');
        if($this->save()){
            return true;
        }
        return false;
    }
    public function getArticleById($id){
        return $this->find($id);
    }
    public function updateArticle($request, $article){
        $article->title = $request->post('title');
        $article->content = $request->post('content');
        $article->img_thumb = $request->post('img_thumb');
        $article->category_id = $request->post('category_id');
        $article->album_id = $request->post('album_id');
        $article->user_id = $request->post('user_id');
        $article->date_public = $request->post('date_public');
        $article->is_delete = $request->post('is_delete');
        $article->created_at = Carbon::now();
        if($article->save()){
            return true;
        }else{
            return false;
        }
    }
    public function getList(){
        return $this->all();
    }
}
