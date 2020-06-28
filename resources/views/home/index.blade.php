@extends('widget.index')
@section('content')
@if(session('notif'))
<div class="alert alert-success">
	{{session('notif')}}
</div>
@endif

<div class="container" style="margin-top:50px">
	<div class="row">
		<a href="{{ asset('?price_desc') }}">Lọc</a>
		<div class="col-sm-9 padding-right">
			<div class="features_items">
				<h2 class="title text-center">Sản phẩm</h2>
				@foreach($products as $product)
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<a href="product/{{$product->id}}/{{$product->slug}}.html"><img
										src="{{asset($product->image)}}" alt="" style="width: 250px; height: 250px;" /></a>
								<h2>{{ number_format($product->price) }} VNĐ</h2>
								<p>{{$product->name}}</p>
								<a href="{{asset('cart/add/'.$product->id)}}" class="btn btn-default add-to-cart">
									<i class="fa fa-shopping-cart"></i>Đặt hàng</a>
							</div>
						</div>
						<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><a href="{{asset('wishlist/add/'.$product->id)}}"><i 
									class="fa fa-plus-square"></i>Thêm vào danh sách mong muốn</a></li>
							</ul>
						</div>
					</div>
				</div>
				@endforeach
				{{ $products->links() }}
			</div>
			<div class="recommended_items">
				<h2 class="title text-center">Sản phẩm hot</h2>
				<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							@foreach($productPay as $item)
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{asset($item->image)}}" alt="" />
										<h2>{{number_format($product->price)}} VNĐ</h2>
											<p>{{$item->name}}</p>
											<a href="{{asset('cart/add/'.$item->id)}}" class="btn btn-default add-to-cart">
											<i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>

									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
