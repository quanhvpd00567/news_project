@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách menu</h3>
                </div>
                <div class="box-body">
                    <a href="{{route('admin.menu.new')}}" class="btn btn-primary">Thêm mới menu</a>
                </div>
                @if(Session::has('success'))
                    <div class="col-md-12 notification">
                        <div class="bg-green disabled alert-dismissible alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                            {{Session::get('success')}}
                        </div>
                    </div>
                @endif

                @if(Session::has('error'))
                    <div class="col-md-12 notification">
                        <div class="bg-red disabled alert-dismissible alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                            {{Session::get('error')}}
                        </div>
                    </div>
                @endif

                <div class="box-body">
                    <div class="col-md-8">
                        @if(count($menus) > 0)
                            <table class="table table-bordered">
                                <thead>
                                    <th style="width: 10px">#</th>
                                    <th class="sorting_asc">
                                        Tên danh mục
                                    </th>
                                    <th>Tên danh mục (Tiếng anh)</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </thead>
                            <tbody>
                                <?php $count = 1 ?>
                                @foreach($menus as $key => $item)
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
                                            <a href="{{route('admin.menu.edit', $item->id)}}" class="btn btn-primary" >
                                                <i class="fa fa-edit"></i>
                                                Sửa
                                            </a>
{{--                                            @if($item->isDelete != Config::get('constant.delete.isDelete'))--}}
{{--                                                <a href="{{route('admin.menu.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Có chắc chắn xóa không?')" >--}}
{{--                                                    <i class="fa fa-trash"></i>--}}
{{--                                                    Xóa--}}
{{--                                                </a>--}}
{{--                                            @else--}}
{{--                                                <a href="{{route('admin.menu.restore', $item->id)}}" class="btn btn-warning" onclick="return confirm('Có chắc cắn khôi phục?')" >--}}
{{--                                                    <i class="fa fa-window-restore"></i>--}}
{{--                                                    Khôi phục--}}
{{--                                                </a>--}}
{{--                                            @endif--}}
                                        </td>
                                    </tr>
                                    <?php $count++ ?>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <div>Không có menu được tìm thấy</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('input[type="checkbox"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
    </script>
@endsection
