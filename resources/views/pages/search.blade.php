@extends('template')

@section('content')
<!-- Shop Page Start -->
<div class="main-shop-page pt-30 pb-30 ptb-sm-60">
	<div class="container">
		<!-- Row End -->
		<div class="row">
			<!-- Sidebar Shopping Option Start -->
			<div class="col-lg-3 order-2 order-lg-1">
				@include('layouts.sidebar')
			</div>
			<!-- Sidebar Shopping Option End -->
			<!-- Product Categorie List Start -->
			<div class="col-lg-9 order-1 order-lg-2">
				<!-- Grid & List View Start -->
				
				<!-- Grid & List View End -->
				<div class="main-categorie mb-all-40">
					<!-- Grid & List Main Area End -->
					<div class="tab-content fix">
						<div id="grid-view" class="tab-pane fade show active">
							<div class="row">
								<!-- Single Product Start -->
								@foreach($products as $product)
								<div class="col-lg-4 col-md-4 col-sm-6 col-6">
									<div class="single-product">
										<!-- Product Image Start -->
										<div class="pro-img">
											<a href="{{route('product.show', $product->id)}}">
												<img class="primary-img" src="{{$product->getImage()}}" alt="single-product">
											</a>
											<a href="#" class="quick_view" data-toggle="modal" @click="func({{$product->id}})" data-target="#myModal" title="Быстрый просмотр"><i class="lnr lnr-magnifier"></i></a>
										</div>
										<!-- Product Image End -->
										<!-- Product Content Start -->
										<div class="pro-content">
											<div class="pro-info">
												<h4><a href="product.html">{{$product->title}}</a></h4>
												<p><span class="price">${{$product->price}}</span></p>
												<div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
											</div>
											<div class="pro-actions">
												<div class="actions-primary">
													<a href="#" title="Добавить в корзину" @click="addToCart({{$product}})"> + Добавить в корзину</a>
												</div>
												<div class="actions-secondary">
													<a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
													<a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
												</div>
											</div>
										</div>
										<!-- Product Content End -->
									</div>
								</div>
								@endforeach
								<!-- Single Product End -->
								
							</div>
							<!-- Row End -->
						</div>
						<!-- #grid view End -->
						
						{{$products->links('vendor.pagination.default')}}
						<!-- Product Pagination Info -->
					</div>
					<!-- Grid & List Main Area End -->
				</div>
			</div>
			<!-- product Categorie List End -->
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</div>
<!-- Shop Page End -->
@endsection