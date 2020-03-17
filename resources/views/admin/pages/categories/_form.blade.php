
<?php

$routeName = 'admin.category.create';
if (!isset($isPageCreate)){
    $routeName = 'admin.category.update';
}
?>

<div class="col-md-6">
    {!! Form::open(['route' => [$routeName, $category->id]]) !!}
    <div class="form-group">
        <label>Danh mục:</label>
        {{Form::text('name', old('name', $category->name) , ['class' => 'form-control', 'placeholder' => 'Tên danh mục'])}}
        @if($errors->has('name'))
            <span class="help-block">{{$errors->first('name')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label>Danh mục <span class="language-waning">(Tiếng anh)</span>:</label>
        {{Form::text('name_en', old('name', $category->name), ['class' => 'form-control', 'placeholder' => 'Tên danh mục bằng tiếng anh'])}}
        @if($errors->has('name_en'))
            <span class="help-block">{{$errors->first('name_en')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label>
            <input type="checkbox" name="status" class="minimal-red"
                @if($category->status == Config::get('constant.status.isShow')))
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
</div>
