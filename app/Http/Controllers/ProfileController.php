<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;
class ProfileController extends Controller
{
    private $categories;
    private $albums;
    private $images;
    private $model_category;
    private $model_article;
    private $model_album;
    private $model_image;
    private $model_order;
    private $model_user;
    private $datas;

    public function __construct()
    {
        $this->model_category = new Category();
        $this->model_article = new Article();
        $this->model_album = new Album();
        $this->model_image = new Image();
        $this->model_order = new Order();
        $this->model_user = new User();
        $this->categories = $this->model_category->getList(0);
        $this->albums = $this->model_album->getList();
        $this->images = $this->model_image->getList(true);
        $this->datas = [
            'categories' => $this->categories,
            'albums' => $this->albums,
            'images' => $this->images,
        ];
    }
    public function history(){
        if (Auth::user()->is_member()){
            $private_date = [
                'histories' => $this->model_order->getHistoryByUserId(Auth::user()->id)
            ];
            $data = array_merge($this->datas, $private_date);
            return view('end_user.history', $data);
        }
        return redirect()->route('profile_info');
    }
    public function index(){
        $data = array_merge($this->datas);
        return view('end_user.profile', $data);
    }

    public function edit(){
        $data = array_merge($this->datas);
        return view('end_user.edit', $data);
    }

    public function update(ProfileRequest $request){
        $this->model_user->updateUser($request, Auth::user(),false);
        session()->flash('success', 'Update profile success');
        return redirect()->route('profile_info');
    }
}
