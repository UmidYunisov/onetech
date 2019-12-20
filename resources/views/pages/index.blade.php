@extends('template')

@section('content')
<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-15 mb-15">
    <div class="container">
       {{ Breadcrumbs::render('/') }}
    </div>
    <!-- Container End -->
</div>
        <!-- Breadcrumb End -->
<!-- Trending Products End Here -->
		<div class="trendig-product pb-100 off-white-bg pb-sm-60">
			<div class="container">
				<div class="trending-box">
					<div class="title-box">
						<h2>Лучшые</h2>
					</div>
					<div class="product-list-box">
						<!-- Arrivals Product Activation Start Here -->
						<div class="trending-pro-active owl-carousel">
							<!-- Single Product Start -->
							@foreach($bests as $best)
							<div class="single-product">
								<!-- Product Image Start -->
								<div class="pro-img">
									<a href="{{route('product.show',$best->id)}}">
										<img class="primary-img" src="{{$best->getImage()}}" alt="single-product">
									</a>
									<a href="" class="quick_view" @click="func({{$best->id}})" data-toggle="modal" data-target="#myModal" title="
									Быстрый просмотр"><i class="lnr lnr-magnifier"></i></a>
								</div>
								<!-- Product Image End -->
								<!-- Product Content Start -->
								<div class="pro-content">
									<div class="pro-info">
										<h4><a href="product.html">{{$best->title}}</a></h4>
										<p><span class="price">${{$best->price}}</span></p>
									</div>
									<div class="pro-actions">
										<div class="actions-primary">
											<a href="#" @click="addToCart({{$best}})"> + Добавить в корзину</a>
										</div>
										<div class="actions-secondary">
											<a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
											<a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
										</div>
									</div>
								</div>
								<!-- Product Content End -->
							</div>
							@endforeach
							<!-- Single Product End -->
						</div>
						<!-- Arrivals Product Activation End Here -->                    
					</div>
					<!-- main-product-tab-area-->
				</div>
			</div>
			<!-- Container End -->
		</div>
		<!-- Trending Products End Here -->
		<!-- Hot Deal Products Start Here -->
		<div class="hot-deal-products pt-100 pt-sm-60">
            <div class="container">
                <div class="all-border">
                   <!-- Product Title Start -->
                   <div class="section-ttitle mb-30">
                        <h2>Хиты продаж  </h2>
                   </div>
                   <!-- Product Title End -->
                    <!-- Hot Deal Product Activation Start -->
                    <div class="hot-deal-active3 owl-carousel">
                    	@foreach($hot_deals as $hot_deal)
                    	<div class="row">
                            <!-- Main Thumbnail Image Start -->
                            <div class="col-lg-6 mb-all-40 hot-product2 ">
                                <!-- Thumbnail Large Image start -->
                                <div class="tab-content">
                                    @foreach($hot_deal->images as $image)
                                    <div id="thumb{{$image->id}}" class="tab-pane fade {{ $loop->first ? 'show active' : '' }}">
                                        <a data-fancybox="images" href="img/products/{{$image->filename}}"><img src="img/products/{{$image->filename}}" alt="product-view"></a>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="product-thumbnail">
                                    <div class="pro-tab-menu nav tabs-area" role="tablist">
                                        @foreach($hot_deal->images as $image)
                                        <a class="{{$loop->first ? 'active' : ''}}" data-toggle="tab" href="#thumb{{$image->id}}"><img src="img/products/{{$image->filename}}" alt="product-thumbnail"></a>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Thumbnail image end -->
                            </div>
                            <!-- Main Thumbnail Image End -->
                            <!-- Thumbnail Description Start -->
                            <div class="col-lg-6 hot-product2">
                                <div class="thubnail-desc fix">
                                    <div class="countdown" data-countdown="2025/03/01"></div>
                                    <h3><a href="{{route('product.show',$hot_deal->id)}}">{{$hot_deal->title}} </a></h3>
                                    <div class="pro-price mtb-30">
                                        <p><span class="price">${{$hot_deal->price}}</span></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <p class="mb-30 pro-desc-details">  {{$hot_deal->text}}</p>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" @click="addToCart({{$hot_deal}})"> + В корзину</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            <!-- Thumbnail Description End -->                        
                        </div>
                        @endforeach
                    </div>
                    <!-- Hot Deal Product Active End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
		<!-- Hot Deal Products End Here -->        
		
		<!-- Arrivals Products Area Start Here -->
		@include('layouts.new_products')
		<!-- Arrivals Products Area End Here -->
		
@endsection