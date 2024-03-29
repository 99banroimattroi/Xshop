@extends('admin.widget.index')
@section('content')
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Products</h4>
      <a href="admin/products/create" type="button" class="btn btn-sm btn-primary">Thêm sản phẩm mới</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th style="width: 5%; text-align: center;">Name</th>
              <th style="width: 5%; text-align: center;">Image</th>
              <th style="width: 15%; text-align: center;">Quantity</th>
              <th style="width: 15%; text-align: center;">Price</th>
              <th style="width: 25%; text-align: center;">Hành động</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td style="width: 5%;" class="text-center"><span class="badge ">
                  {{$product->name}}</span></td>
              <td style="width: 5%;" class="text-center"><img width="150px"
                  src="{{asset($product->image)}}" alt=""></td>
              <td style="width: 15%;" class="text-center"><span class="badge" style="white-space: nowrap; width: 200px; border: 1px solid #000000;
                 overflow: hidden; text-overflow: clip;">
                  {{$product->quantity}}</span></td>
              <td style="width: 15%;" class="text-center"><span >
                  {{$product->price}}</span></td> 
              <td style="width: 25%;">
                <a class="btn btn-sm btn-primary" href="{{ route('products.show', $product->id) }}" title="">Xem</a>
                @if(Auth::user()->level==1 || Auth::user()->level==2)
                <a class="btn btn-sm btn-primary" href="{{ route('products.edit', $product->id) }}" title="">Sửa</a>
                @endif
                @if(Auth::user()->level==2)
                <form action="{{ route('products.destroy', $product->id) }}" class="form-delete" role="form"
                  method="post" style="display: inline">
                  @csrf
                  @method('delete')
                  <input type="submit" value="Xóa" class="btn btn-sm btn-danger">
                </form>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
