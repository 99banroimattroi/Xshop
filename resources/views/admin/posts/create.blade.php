@extends('admin.widget.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tạo bài viết</div>
                <div class="card-body">
                    <form method="post" action="{{ route('posts.store') }}" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label class="label">Tiêu đề bài viết: </label>
                            <input type="text" name="title" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="image">Ảnh</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <div class="form-group">
                            <label class="label">Thân bài: </label>
                            <textarea name="body" id="text" rows="10" cols="30" class="form-control" required></textarea>
                            <script src={{ url('ckeditor/ckeditor.js') }}></script>
                            <script>
                                CKEDITOR.replace( 'text', {
                                    filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',} );
                            </script>
                            @include('ckfinder::setup')
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Tạo</button>
                            <a href="admin" class="btn btn-default btn-xl"> Quay lại </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection