<!DOCTYPE html>
<html lang="en">
<head>
	<title>OneTech</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/img/favicon.ico">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>

<body>

	<div class="wrapper" id="app">
		<!-- Banner Popup Start -->
		<div class="popup_banner">
			<span class="popup_off_banner">×</span>
			<div class="banner_popup_area">
				<img src="/img/banner/pop-banner.jpg" alt="">
			</div>
		</div>
		<!-- Banner Popup End -->
		
		<!--Header-->
		@include('layouts.header')
		<!--End Header-->
		
		@if(session('status'))
		<div class="container mt-30">
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				</div>
			</div>
		</div>
		@endif
		
		@if($errors->any())
		<div class="container mt-30">
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li>
								{{ $error }}
							</li>
							@endforeach
						</ul>                  
					</div>
				</div>
			</div>
		</div>
		@endif

		@yield('content')
		
		<!-- Support Area Start Here -->
		<div class="support-area bdr-top">
			<div class="container">
                <div class="d-flex flex-wrap text-center">
                    <div class="single-support">
                        <div class="support-icon">
                            <i class="lnr lnr-gift"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Great Value</h6>
                            <span>Nunc id ante quis tellus faucibus dictum in eget.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Worlwide Delivery</h6>
                            <span>Quisque posuere enim augue, in rhoncus diam dictum non</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-lock"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Safe Payment</h6>
                            <span>Duis suscipit elit sem, sed mattis tellus accumsan.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-enter-down"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Shop Confidence</h6>
                            <span>Faucibus dictum suscipit eget metus. Duis  elit sem, sed.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-users"></i>
                        </div>
                        <div class="support-desc">
                            <h6>24/7 Help Center</h6>
                            <span>Quisque posuere enim augue, in rhoncus diam dictum non.</span>
                        </div>
                    </div>
                </div>
            </div>
			<!-- Container End -->
		</div>
		<!-- Support Area End Here -->
		<!-- Footer Area Start Here -->
		<footer class="off-white-bg2 pt-95 bdr-top pt-sm-55">
			<!-- Footer Top Start -->
			<div class="footer-top">
				<div class="container">
					<!-- Signup Newsletter Start -->
					<div class="row mb-60">
						<div class="col-xl-7 col-lg-7 ml-auto mr-auto col-md-8">
							<div class="news-desc text-center mb-30">
								<h3>Подпишитесь на рассылку</h3>
								<p>Узнайте первым. Подпишитесь на рассылку сегодня</p>
							</div>
							<div class="newsletter-box">
								<form action="/subscribe" method="post">
									@csrf
									<input class="subscribe" placeholder="Ваш электронный адрес" name="email" id="subscribe" type="text">
									<button type="submit" class="submit">подписываться!</button>
								</form>
							</div>
						</div>
					</div> 
					<!-- Signup-Newsletter End -->                   
					<div class="row">
						<!-- Single Footer Start -->
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-footer mb-sm-40">
								<h3 class="footer-title">Information</h3>
								<div class="footer-content">
									<ul class="footer-list">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Delivery Information</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Terms & Conditions</a></li>
										<li><a href="#">FAQs</a></li>
										<li><a href="#">Return Policy</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Single Footer Start -->
						<!-- Single Footer Start -->
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-footer mb-sm-40">
								<h3 class="footer-title">Customer Service</h3>
								<div class="footer-content">
									<ul class="footer-list">
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">Order History</a></li>
										<li><a href="wishlist.html">Wish List</a></li>
										<li><a href="#">Site Map</a></li>
										<li><a href="#">Gift Certificates</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Single Footer Start -->
						<!-- Single Footer Start -->
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-footer mb-sm-40">
								<h3 class="footer-title">Extras</h3>
								<div class="footer-content">
									<ul class="footer-list">
										<li><a href="#">Newsletter</a></li>
										<li><a href="#">Brands</a></li>
										<li><a href="#">Gift Certificates</a></li>
										<li><a href="#">Affiliate</a></li>
										<li><a href="#">Specials</a></li>
										<li><a href="#">Site Map</a></li>      
									</ul>
								</div>
							</div>
						</div>
						<!-- Single Footer Start -->
						<!-- Single Footer Start -->
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-footer mb-sm-40">
								<h3 class="footer-title">My Account</h3>
								<div class="footer-content">
									<ul class="footer-list">
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">My Account</a></li>
										<li><a href="#">Order History</a></li>
										<li><a href="#">Wish List</a></li>
										<li><a href="#">Newsletter</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Single Footer Start -->
						<!-- Single Footer Start -->
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="single-footer mb-sm-40">
								<h3 class="footer-title">Контакты</h3>
								<div class="footer-content">
									<ul class="footer-list address-content">
										<li><i class="lnr lnr-map-marker"></i> Адрес: 169-C, Technohub, Dubai Silicon Oasis.</li>
										<li><i class="lnr lnr-envelope"></i><a href="#"> напишите нам: Support@onetech.com </a></li>
										<li>
											<i class="lnr lnr-phone-handset"></i> Телефон: (+800) 123 456 789)
										</li>
									</ul>
									<div class="payment mt-25 bdr-top pt-30">
										<a href="#"><img class="img" src="/img/payment/1.png" alt="payment-image"></a>
									</div>                                   
								</div>
							</div>
						</div>
						<!-- Single Footer Start -->
					</div>
					<!-- Row End -->
				</div>
				<!-- Container End -->
			</div>
			<!-- Footer Top End -->
			<!-- Footer Middle Start -->
			<div class="footer-middle text-center">
				<div class="container">
					<div class="footer-middle-content pt-20 pb-30">
						<ul class="social-footer">
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><img src="/img/icon/social-img1.png" alt="google play"></a></li>
							<li><a href="#"><img src="/img/icon/social-img2.png" alt="app store"></a></li>
						</ul>
					</div>
				</div>
				<!-- Container End -->
			</div>
			<!-- Footer Middle End -->
			<!-- Footer Bottom Start -->
			<div class="footer-bottom pb-30">
				<div class="container">

					<div class="copyright-text text-center">                    
						<p>Copyright © 2019 <a target="_blank" href="#">Onetech</a> Все права защищены.</p>
					</div>
				</div>
				<!-- Container End -->
			</div>
			<!-- Footer Bottom End -->
		</footer>
		<!-- Footer Area End Here -->
		<!-- Quick View Content Start +++++++++++++++++++++++++++++++++++++++-->
		<div class="main-product-thumbnail quick-thumb-content">
			<div class="container">
				<!-- The Modal -->
				<div class="modal fade" id="myModal">
					<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								<div class="row">
									<!-- Main Thumbnail Image Start -->
									<div class="col-lg-5 col-md-6 col-sm-5">

										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators carousel-indicators-numbers">
												<li v-for="(items, index) in product.images" data-target="#carouselExampleIndicators" :data-slide-to="index" :class="{'active': index === 0}">@{{index+1}}</li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item " v-for="(items, index) in product.images" :class="{'active': index === 0}">
													<img class="d-block w-100" v-bind:src="'/img/products/'+items.filename" alt="First slide">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>


									</div>
									<!-- Main Thumbnail Image End -->
									<!-- Thumbnail Description Start -->
									<div class="col-lg-7 col-md-6 col-sm-7">
										<div class="thubnail-desc fix mt-sm-40">
											<h3 class="product-header">@{{product.title}}</h3>
											<div class="pro-price mtb-30">
												<p class="d-flex align-items-center"><span class="price">$@{{product.price}}</span><span class="saving-price">save 8%</span></p>
											</div>
											<p class="mb-20 pro-desc-details">
											@{{product.text}}
											</p>
										</div>
									</div>
									<!-- Thumbnail Description End -->
								</div>
							</div>
							<!-- Modal footer -->
							<div class="custom-footer">
								<div class="socila-sharing">
									<ul class="d-flex">
										<li>share</li>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Quick View Content End -->
	</div>
	<script type="application/javascript" src="/js/app.js"></script>
	<script type="application/javascript" src="/js/scripts.js"></script>

</body>

</html>