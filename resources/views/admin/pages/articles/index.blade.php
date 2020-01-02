@extends('admin.layout.master')
@section('title')
    List Articles
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Articles</h3>
                    <a href="{{ route('get_new_view_article') }}" class="btn btn-success">Create</a>
                    <table class="table table-bordered  ">
                        <tbody>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th style="width: 40%">Title</th>
                            <th style="width: 20%">Content</th>
                            <th style="width: 20%">Img Thumb</th>
                            <th style="width: 50%">Category Id</th>
                            <th style="width: 50%">Album Id</th>
                            <th style="width: 50%">User Id</th>
                            <th style="width: 50%">Date Public</th>
                            <th style="width: 50%">Is Delete</th>
                            <th style="width: 40%">Created at</th>
                            <th style="width: 40%">Updated at</th>
                            <th>Action</th>
                        </tr>
                        <?php $count = 1; ?>
                        @foreach($lists as $key => $article)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->content }}</td>
                                <td>{{ $article->img_thumb }}</td>
                                <td>{{ $article->category_id }}</td>
                                <td>{{ $article->album_id }}</td>
                                <td>{{ $article->user_id }}</td>
                                <td>{{ $article->date_public }}</td>
                                <td>{{ $article->is_delete }}</td>

                                <td><span>{{ $article->created_at }}</span></td>
                                <td><span>{{ $article->updated_at }}</span></td>
                                <td>
                                    <a href="{{ route('get_view_edit_article', ['id' => $article->id]) }}">Edit</a>
                                </td>
                            </tr>
                            <?php $count++ ; ?>
                        @endforeach
                        </tbody>
                    </table>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection