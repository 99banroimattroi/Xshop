@extends('admin.widget.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Quản lý bài viết</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right">Tạo bài viết</a>
            <table class="table table-bordered">
                <thead>
                    <th >Id</th>
                    <th>Tiêu đề</th>
                    <th style="width: 300px">Hành động</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Xem</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Sửa</a>
                        <form style="display: inline;" method="POST" action="{{ route('posts.destroy', $post->id) }}" role="form">
                            @csrf
                            @method('delete')
                                <input type="submit" value="Xóa" class="btn btn-danger">
                        </form>
                        <!-- <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger">Xóa</a> -->
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
@endsection
