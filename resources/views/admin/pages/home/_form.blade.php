
<?php
$routeName = 'admin.home.page.update';
?>

{!! Form::open(['route' => $routeName, 'id' =>"image-upload",  'files' => true] ) !!}
<div class="col-md-6">
    <div class="form-group">
        <label>Nội dung 1:</label>
        {{Form::text('text_block_1', old('text_block_1', $dataHome->text_block_1) , ['class' => 'form-control', 'placeholder' => 'Nội dung 1'])}}
    </div>

    <div class="form-group">
        <label>Giới thiệu:</label>
        {{Form::textarea('description', old('description', $dataHome->description) , ['class' => 'form-control textarea-resize-vertical', 'id' => 'introduce'])}}
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Nội dung 1 <span class="language-waning">(Tiếng anh)</span>:</label>
        {{Form::text('text_block_1_en', old('text_block_1_en', $dataHome->text_block_1_en), ['class' => 'form-control', 'placeholder' => 'Nội dung 1 bằng tiếng anh'])}}
    </div>

    <div class="form-group">
        <label>Giới thiệu <span class="language-waning">(Tiếng anh)</span>:</label>
        {{Form::textarea('description_en', old('description_en', $dataHome->description_en) , ['class' => 'form-control textarea-resize-vertical', 'id' => 'introduce_en'])}}
    </div>

</div>

<session id="block-1">
    {{--block 1--}}
    <div class="col-md-6">
        <div class="form-group">
            <label>Tiêu đề block 1:</label>
            {{Form::text('text_block_2', old('text_block_2', $dataHome->text_block_2), ['class' => 'form-control', 'placeholder' => 'Tiêu đề block 1'])}}

        </div>
        <div class="form-group">
            <label>Nội dung cho block 1:</label>
            {{Form::textarea('content_block_2', old('content_block_2', $dataHome->content_block_2) , ['class' => 'form-control textarea-resize-vertical', 'id' => 'content_block_2'])}}
        </div>
    </div>
    {{--end block 1--}}

    {{--block 1 english--}}
    <div class="col-md-6">
        <div class="form-group">
            <label>Tiêu đề block 1 <span class="language-waning">(Tiếng anh)</span>:</label>
            {{Form::text('text_block_2_en', old('text_block_2_en', $dataHome->text_block_2_en), ['class' => 'form-control', 'placeholder' => 'Tiêu đề block 1 bằng tiếng anh'])}}
        </div>

        <div class="form-group">
            <label>Nội dung cho block 1 <span class="language-waning">(Tiếng anh)</span>:</label>
            {{Form::textarea('content_block_2_en', old('content_block_2_en', $dataHome->content_block_2_en) , ['class' => 'form-control textarea-resize-vertical', 'id' => 'content_block_2_en'])}}
        </div>
    </div>
    {{--end block 1 english--}}
    <div class="col-md-12">
        <div style="padding-top: 10px;">
            <label style="font-weight: normal; cursor: pointer">
                <input type="checkbox" name="isShowBlock_2" class="minimal-red"
                       @if($dataHome->isShowBlock_2 == Config::get('constant.status.isShow')))
                       checked
                    @endif
                >
                Tích để hiện thị khối 1
            </label>
        </div>
    </div>
</session>

<session id="block-2">
    {{--block 2--}}
    <div class="col-md-6">
        <div class="form-group">
            <label>Tiêu đề block 2:</label>
            {{Form::text('text_block_3', old('text_block_3', $dataHome->text_block_3), ['class' => 'form-control', 'placeholder' => 'Tiêu đề block 2'])}}

        </div>

        <div class="form-group">
            <label>Nội dung cho block 2:</label>
            {{Form::textarea('content_block_3', old('content_block_3', $dataHome->content_block_3) , ['class' => 'form-control textarea-resize-vertical', 'id' => 'content_block_3'])}}
        </div>

    </div>
    {{--end block 2--}}

    {{--block 2 english--}}
    <div class="col-md-6">
        <div class="form-group">
            <label>Tiêu đề block 2 <span class="language-waning">(Tiếng anh)</span>:</label>
            {{Form::text('text_block_3_en', old('text_block_3_en', $dataHome->text_block_3_en), ['class' => 'form-control', 'placeholder' => 'Tiêu đề block 2 bằng tiếng anh'])}}
        </div>

        <div class="form-group">
            <label>Nội dung cho block 2 <span class="language-waning">(Tiếng anh)</span>:</label>
            {{Form::textarea('content_block_3_en', old('content_block_3_en', $dataHome->content_block_3_en) , ['class' => 'form-control textarea-resize-vertical', 'id' => 'content_block_3_en'])}}
        </div>
    </div>
    {{--end block 2 english--}}
    <div class="col-md-12">
        <div style="padding-top: 10px;">
            <label style="font-weight: normal; cursor: pointer">
                <input type="checkbox" name="isShowBlock_3" class="minimal-red"
                       @if($dataHome->isShowBlock_3 == Config::get('constant.status.isShow')))
                       checked
                    @endif
                >
                Tích để hiện thị khối 2
            </label>
        </div>
    </div>
</session>

<session>
    <div class="col-md-6">
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Nhập link video youtube</label>
            {{Form::text('video', old('video', $dataHome->video), ['class' => 'form-control', 'id' => "banner", 'placeholder' => "Link video youtube"])}}
        </div>
    </div>
</session>
<div class="col-md-12 text-center">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i>
            Lưu
        </button>
    </div>
</div>

{!! Form::close() !!}
