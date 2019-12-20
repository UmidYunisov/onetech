@extends('template')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area mt-15">
    <div class="container">
       {{ Breadcrumbs::render('contacts') }}
    </div>
    <!-- Container End -->
</div>
<!-- breadcrumb-area end -->

<!-- Contact Email Area Start -->
<div class="contact-area ptb-100 ptb-sm-60">
	<div class="container">
		<h3 class="mb-20">Связаться с нами</h3>
		<p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		<form id="contact-form" class="contact-form" action="" method="post">
			@csrf
			<div class="address-wrapper row">
				<div class="col-md-12">
					<div class="address-fname">
						<input class="form-control" type="text" name="name" placeholder="Имя">
					</div>
				</div>
				<div class="col-md-6">
					<div class="address-email">
						<input class="form-control" type="text" name="email" placeholder="Email">
					</div>
				</div>
				<div class="col-md-12">
					<div class="address-subject">
						<input class="form-control" type="text" name="subject" placeholder="Тема">
					</div>
				</div>
				<div class="col-md-12">
					<div class="address-textarea">
						<textarea name="message" class="form-control" placeholder="Напишите ваше сообщение"></textarea>
					</div>
				</div>
			</div>
			<p class="form-message"></p>
			<div class="footer-content mail-content clearfix">
				<div class="send-email float-md-right">
					<input value="Отправить" class="return-customer-btn" type="submit">
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Contact Email Area End -->
<!-- Google Map Start -->
<div class="goole-map">
	<div id="map" style="height:400px"></div>
</div>
<!-- Google Map End -->  
@endsection