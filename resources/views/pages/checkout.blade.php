@extends('template')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area mt-15">
	<div class="container">
		{{ Breadcrumbs::render('checkout') }}
	</div>
	<!-- Container End -->
</div>
<!-- breadcrumb-area end -->

<!-- checkout-area start -->

<form action="#" @submit.prevent="order" method="post">
@csrf
<div class="checkout-area pb-100 pt-50 pb-sm-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="checkbox-form mb-sm-40">
					<h3>Платежные реквизиты</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="country-select clearfix mb-30">
								<label>Город <span class="required">*</span></label>
								<select class="wide" v-model="orders.city" required="">
									<option disabled value="">Ваш город</option>
        							<option>Тошкент</option>
        							<option>Андижон</option>
        							<option>Фаргона</option>
        							<option>Хоразим</option>
        							<option>Самарканд</option>
        							<option>Бухоро</option>
								</select>
							</div>
							
						</div>
						<div class="col-md-6">
							<div class="checkout-form-list mb-sm-30">
								<label>Имя <span class="required">*</span></label>
								<input type="text" v-model="orders.name" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkout-form-list">
								<label>Адрес <span class="required">*</span></label>
								<input type="text" v-model="orders.address" placeholder="Адрес доставки" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="checkout-form-list mb-30">
								<label>Email <span class="required">*</span></label>
								<input type="email" v-model="orders.email" placeholder="" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="checkout-form-list mb-30">
								<label>Номер телефона  <span class="required">*</span></label>
								<input type="text" v-model="orders.phone_number" placeholder="+998" required />
							</div>
						</div>
						
						</div>
						<div class="order-notes">
							<div class="checkout-form-list">
								<label>Примечания к заказу</label>
								<textarea id="checkout-mess" v-model="orders.message" cols="30" rows="10" placeholder="Заметки о вашем заказе, пример специальные заметки для доставки."></textarea>
							</div>
						</div>
						
						<button type="submit" :disabled="disable" class="return-customer-btn">Заказать</button>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<your-order></your-order>
			</div>
		</div>
	</div>
</div>
</form>
<!-- checkout-area end -->
@endsection