<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    private $model_country;
    public function __construct()
    {
        $this->model_country = new Country();
    }
    public function index(){
        $lists = $this->model_country->getList();
        $data['lists'] = $lists;
        $title = 'Danh sach coutries';
        $data['title'] = $title;
//        return view('admin.pages.countries.index', compact('lists', 'title'));
        return view('admin.pages.countries.index', $data);
    }
    public function create_new(){
        return view('admin.pages.countries.new');
    }
    public function create(Request $request){
        $result = $this->model_country->createCountry($request);
        if($result){
            return redirect()->route('list_country');
        }
        return redirect()->route('get_view_new_country');
    }
    public function edit($id){
        $country = $this->model_country->getCountryById($id);
        if($country == null){
            return abort(404);
        }
        return view('admin.pages.countries.edit', compact('country'));
    }
    public function update($id , Request $request){
        $country = $this->model_country->getCountryById($id);
        if($country == null){
            return abort(404);
        }
        $result = $this->model_country->updateCountry($request, $country);
        if($result){
            return redirect()->route('list_country');
        }
        return redirect()->route('get_view_edit_country', ['id', $id]);
    }
}
