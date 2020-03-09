@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách danh mục </h3>
                    @include('admin.layout.partials._notification')
                    <div class="box-body">
                        <a href="{{route('admin.category.new')}}" class="btn btn-primary" id="btn-create">
                            Tạo mới danh mục
                        </a>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <thead>
                                <th style="width: 10px">#</th>
                                <th>Tên danh mục</th>
                                <th>Tên danh mục (Tiếng anh)</th>
                                <th>Trạng thái</th>
                                <th></th>
                                </thead>
                                <tbody>
                                <?php $count = 1 ?>
                                @foreach($categories as $key => $item)
<!--                                    --><?php
//                                        dd($item->name);
//                                    ?>
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->name_en}}</td>
                                        <td>
                                            @if($item->status == Config::get('constant.status.isShow'))
                                                <span class="text-success">Đang hiển thị</span>
                                            @else
                                                <span class="text-danger">Không hiển thị</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.category.edit', $item->id)}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                                Sửa
                                            </a>
{{--                                            <a href="{{route('admin.category.delete', $item->id)}}"--}}
{{--                                               class="btn btn-danger"--}}
{{--                                               onclick="return confirm('Có chắc chắn xóa không?')">--}}
{{--                                                <i class="fa fa-trash"></i>--}}
{{--                                                Xóa--}}
{{--                                            </a>--}}
                                        </td>
                                    </tr>
                                    <?php $count++ ?>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
