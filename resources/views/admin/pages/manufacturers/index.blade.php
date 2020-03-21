@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới loại sản xuất</h3>
                    @include('admin.layout.partials._notification')
                    <div class="box-body">
                        <a href="{{route('admin.manufacturer.new')}}" class="btn btn-primary" id="btn-create">
                            Tạo mới hình thức sản xuất
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead class="text-center">
                            <th style="width: 10px">#</th>
                            <th style="width: 25%">Banner</th>
                            <th style="width: 20%">
                                Tên loại hình sản xuất
                                <br>
                                (Tiếng việt)
                            </th>
                            <th style="width: 20%">
                                Tên loại hình sản xuất
                                <br>
                                (Tiếng anh)
                            </th>
                            <th style="width: 150px">Trạng thái</th>
                            <th></th>
                            </thead>
                            <tbody>
                            <?php
                            $count  = ($manufacturers->currentPage() - 1) * $manufacturers->perPage() + 1;
                            ?>
                            @foreach($manufacturers as $manufacturer)
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>
                                        <img style="width: 90%" class="img-thumb" src="{{$manufacturer->banner}}" alt="">
                                    </td>
                                    <td>{{ $manufacturer->name }}</td>
                                    <td>{{ $manufacturer->name_en }}</td>
                                    <td>
                                        @if($manufacturer->status == Config::get('constant.status.isShow'))
                                            <span class="text-success">Đang hiển thị</span>
                                        @else
                                            <span class="text-danger">Không hiển thị</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.manufacturer.edit', $manufacturer->id)}}" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>
                                            Sửa
                                        </a>
                                        <a href="{{route('admin.manufacturer.image', [$manufacturer->id])}}" class="btn btn-primary">
                                            <i class="fa fa-image"></i>
                                            Thêm ảnh
                                        </a>
                                        <a href="{{route('admin.manufacturer.delete', [$manufacturer->id])}}" class="btn btn-danger"
                                           onclick="return confirm('Có chắc chắn xóa không?')">
                                            <i class="fa fa-trash"></i>
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
                                <?php $count++ ?>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $manufacturers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
