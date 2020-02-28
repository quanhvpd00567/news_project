<li><a href="/" class="active">{{trans('view.commons.home')}}</a></li>
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
    <a href="{{route('product.list')}}"
       aria-haspopup="true" aria-expanded="false">
        {{trans('view.category.Product')}}
{{--        <span class="caret"></span>--}}
    </a>

{{--    <ul class="dropdown-menu">--}}
{{--        <li><a href="#">Action</a></li>--}}
{{--        <li><a href="#">Another action</a></li>--}}
{{--    </ul>--}}
</li>
<li><a href="{{route('manufacturers')}}">{{trans('view.manufacturer.manufacturer')}}</a></li>
<li><a href="{{route('gallery')}}">{{trans('view.gallery.gallery')}}</a></li>
<li><a href="{{route('contact')}}">{{trans('view.contact.Contact')}}</a></li>
