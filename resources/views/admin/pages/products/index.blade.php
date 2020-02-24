@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách danh mục </h3>
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
                        <a href="{{route('admin.product.new')}}" class="btn btn-primary" id="btn-create">
                            Tạo mới sản phẩm
                        </a>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <th style="width: 10px">#</th>
                                    <th style="width: 100px;">
                                        Hình ảnh mặt ngoài
                                    </th>
                                    <th style="width: 100px;">Hình ảnh mặt trong</th>
                                    <th style="width: 20%;">Tên sản phẩm</th>
                                    <th style="width: 20%;">Tên sản phẩm tiếng anh</th>
                                    <th style="width: 150px">Danh mục</th>
                                    <th style="width: 150px">Trạng thái</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <?php
                                    $count  = ($products->currentPage() - 1) * $products->perPage() + 1;
                                ?>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$count}}</td>
                                            <td>
                                                <img class="img-thumb" src="{{$product->image_1}}" alt="">
                                            </td>
                                            <td>
                                                <img class="img-thumb" src="{{$product->image_2}}" alt="">
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->name_en }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>
                                                @if($product->status == Config::get('constant.status.isShow'))
                                                    <span class="text-success">Đang hiển thị</span>
                                                @else
                                                    <span class="text-danger">Không hiển thị</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                    Sửa
                                                </a>
                                                <a href="{{route('admin.album.new', [$product->id])}}" class="btn btn-primary">
                                                    <i class="fa fa-image"></i>
                                                    Thêm ảnh
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $count++ ?>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
