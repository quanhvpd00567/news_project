<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\HomePage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $modelHome = new HomePage();

        $dataHome = $modelHome->first();
        if (is_null($dataHome)) {
            $dataHome = $modelHome;
        } else {
            if (!empty($dataHome->video) && !is_null($dataHome->video)) {
                $dataHome->video = 'https://www.youtube.com/watch?v=' . $dataHome->video;
            }
        }
        $data = [
            'dataHome' => $dataHome
        ];

        return view('admin.pages.home.index', $data);
    }

    public function update(Request $request)
    {
        try {
            $params = $request->all();
            if (isset($request['isShowBlock_2'])) {
                $params['isShowBlock_2'] = \Config::get('constant.status.isShow');
            } else {
                $params['isShowBlock_2'] = \Config::get('constant.status.isNotShow');
            }

            if (isset($request['isShowBlock_3'])) {
                $params['isShowBlock_3'] = \Config::get('constant.status.isShow');
            } else {
                $params['isShowBlock_3'] = \Config::get('constant.status.isNotShow');
            }

            unset($params['_token']);

            if (isset($params['video'])) {
                parse_str(parse_url($params['video'], PHP_URL_QUERY), $my_array_of_vars);
                $params['video'] = $my_array_of_vars['v'];
            }
            $modelHome = new HomePage();
            $dataHome = $modelHome->first();

            if (is_null($dataHome)) {
                $dataHome = $modelHome;
                $params = array_merge($params, [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
                $isSave = $dataHome->insert($params);
            } else {
                $params = array_merge($params, [
                    'updated_at' => Carbon::now()
                ]);
                $isSave = $dataHome->update($params);
            }
            if ($isSave) {
                return redirect()->route('admin.home.page')->with('success', 'Cập nhật nội dung thành công');
            }
            return redirect()->route('admin.home.page')->with('error', 'Cập nhật nội dung thành công');
        } catch (\Exception $exception) {
            return redirect()->route('admin.home.page')->with('error', $exception->getMessage());
        }
    }
}
