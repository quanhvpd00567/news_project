<?php

$action = app('request')->route()->getAction();
$prefixUrl = $action['prefix'];
$asUrl = $action['as'];
//dd($asUrl);
?>
<?php
$introduce = \App\Models\Introduce::select('id', 'name', 'name_en', 'slug')
    ->where('status', \Config::get('constant.status.isShow'))
    ->get();
if (count($introduce) > 0){
    $urlFirstIntroduce = \App\Http\Services\CommonService::createUrlProduct($introduce[0]->id, $introduce[0]->slug, \Config::get('constant.keys_url.introduce'), 'about-us.detail');
}else{
    $urlFirstIntroduce = '#';
}
?>

<li><a href="/" class="@if($asUrl == 'home') active @endif">{{trans('view.commons.home')}}</a></li>

<li class="dropdown">
    <a href="{{$urlFirstIntroduce}}" class="@if($asUrl == 'about-us.detail') active @endif">
        {{trans('view.about-us.about-us')}}
    </a>

    @if(count($introduce) > 0)
    <ul class="dropdown-menu">
        @foreach($introduce as $item)
            <li>
                <a href="{{\App\Http\Services\CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.introduce'), 'about-us.detail')}}">
                    {{App::isLocale('vi') ? $item->name : $item->name_en}}
                </a>
            </li>
        @endforeach
    </ul>
    @endif
</li>
<li class="dropdown">
    <?php
    $categories = \App\Models\Category::select('id', 'name', 'name_en', 'slug')
        ->where('status', \Config::get('constant.status.isShow'))
        ->get();
    ?>

    <a href="{{route('product.list')}}"
       class="@if($asUrl == 'product.list') active @endif">
        {{trans('view.category.Product')}}
    </a>

    @if(count($categories) > 0)
        <ul class="dropdown-menu">
            @foreach($categories as $item)
                @if(count($item->products) > 0)
                    <li>
                        <a href="{{\App\Http\Services\CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.category'), 'categories.product')}}">
                            {{App::isLocale('vi') ? $item->name : $item->name_en}}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
</li>
<li class="dropdown">
    <?php
        $manufacturerModel = new \App\Models\admin\Manufacturer();
        $manufacturers = $manufacturerModel->getListManufacturer()
    ?>
    <a href="{{route('manufacturers')}}"
       class="@if($asUrl == 'manufacturers' || $asUrl == 'manufacturer.detail') active @endif">
        {{trans('view.manufacturer.manufacturer')}}
    </a>

    @if(count($manufacturers) > 0)
        <ul class="dropdown-menu">
            @foreach($manufacturers as $item)
                <li>
                    <a href="{{\App\Http\Services\CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.manufacturer'), 'manufacturer.detail')}}">
                        {{App::isLocale('vi') ? $item->name : $item->name_en}}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

</li>
<li><a href="{{route('gallery')}}" class="@if($asUrl == 'gallery') active @endif">{{trans('view.gallery.gallery')}}</a>
</li>
<li><a href="{{route('contact')}}" class="@if($asUrl == 'contact') active @endif">{{trans('view.contact.Contact')}}</a>
</li>
