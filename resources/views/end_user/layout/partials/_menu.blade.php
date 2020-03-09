<?php

$action = app('request')->route()->getAction();
$prefixUrl = $action['prefix'];
$asUrl = $action['as'];
//dd($asUrl);
?>


<li><a href="/" class="@if($asUrl == 'home') active @endif">{{trans('view.commons.home')}}</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
       aria-haspopup="true" aria-expanded="false">
        {{trans('view.about-us.about-us')}}
        <span class="caret"></span>
    </a>
    <?php
        $introduce = \App\Models\Introduce::select('id', 'name', 'name_en', 'slug')
            ->where('status', \Config::get('constant.status.isShow'))
            ->get();
    ?>
    @if(count($introduce) > 0)
    <ul class="dropdown-menu">
        @foreach($introduce as $item)
            <li>
                <a href="{{\App\Http\Services\CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.type.introduce'), 'about-us.detail')}}">
                    {{App::isLocale('vi') ? $item->name : $item->name_en}}
                </a>
            </li>
        @endforeach
    </ul>
    @endif
</li>
<li>
    <a href="{{route('product.list')}}" class="@if($asUrl == 'product.list') active @endif" aria-haspopup="true" aria-expanded="false">
        {{trans('view.category.Product')}}
    </a>
</li>
<li><a href="{{route('manufacturers')}}" class="@if($asUrl == 'manufacturers') active @endif" >{{trans('view.manufacturer.manufacturer')}}</a></li>
<li><a href="{{route('gallery')}}"  class="@if($asUrl == 'gallery') active @endif">{{trans('view.gallery.gallery')}}</a></li>
<li><a href="{{route('contact')}}"  class="@if($asUrl == 'contact') active @endif" >{{trans('view.contact.Contact')}}</a></li>
