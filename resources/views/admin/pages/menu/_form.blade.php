<?php

    $routeName = 'admin.menu.create';
    if (!isset($isPageCreate)){
        $routeName = 'admin.menu.update';
    }
?>

{!! Form::open(['route' => [$routeName, $menu->id]]) !!}
<div class="form-group">
    <label>Menu: <span class="cke_required">*</span></label>
    {{Form::text('name', old('name', $menu->name) , ['class' => 'form-control', 'placeholder' => 'Tên Menu'])}}
    @if($errors->has('name'))
        <span class="help-block">{{$errors->first('name')}}</span>
    @endif
</div>

<div class="form-group">
    <label>Menu <span class="language-waning">(Tiếng anh)</span>:<span class="cke_required">*</span></label>
    {{Form::text('name_en', old('name_en', $menu->name_en), ['class' => 'form-control', 'placeholder' => 'Tên Menu bằng tiếng anh'])}}
    @if($errors->has('name_en'))
        <span class="help-block">{{$errors->first('name_en')}}</span>
    @endif
</div>

<div class="form-group">
    <label>
        <input type="checkbox" name="status" class="minimal-red"
            @if($menu->status == Config::get('constant.status.isShow') || request()->has('status')))
                checked
            @endif
        >
        Tích để hiện thị
    </label>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Lưu</button>
</div>

{!! Form::close() !!}
