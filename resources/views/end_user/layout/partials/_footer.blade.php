<footer class="news-footer">
    <div class="container">
        <div class="row" id="footer-info">
            <div class="col-sm-6 col-md-7">
                <div class="group-1">
                    <div class="lable-title">{{trans('view.commons.office')}}</div>
                    <div>
                        {{App::isLocale('vi') ? $settings->office_branch : $settings->office_branch_en}}
                    </div>
                </div>
                <div class="group-1">
                    <div class="lable-title">{{trans('view.commons.factory')}}</div>
                    <div>
                        {{App::isLocale('vi') ? $settings->factory : $settings->factory_en}}
                    </div>
                </div>
                <div class="group-1">
                    <div class="lable-title">{{trans('view.commons.warehouse')}}</div>
                    <div>
                        {{App::isLocale('vi') ? $settings->warehouse : $settings->warehouse_en}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5">
                <div class="group-2">
                    <div class="lable-title">Tel:</div>
                    <div>
                        {{$settings->tel}}
                    </div>
                </div>
                <div class="group-2">
                    <div class="lable-title">Hotline:</div>
                    <div>
                        {{$settings->hotline}}
                    </div>
                </div>
                <div class="group-2">
                    <div class="lable-title">Fax:</div>
                    <div>
                        {{$settings->fax}}
                    </div>
                </div>
                <div class="group-2">
                    <div class="lable-title">Email:</div>
                    <div>{{$settings->email}}</div>
                </div>
            </div>
        </div>
        <div class="row" id="company-copyright">
            <div class="col-sm-12 col-md-12">
                <span>
                    <div>{{$settings->copyright}}</div>
                </span>
            </div>
        </div>
    </div>
    <div></div>
</footer>
