@extends('template')

@section('content')
<!-- Register Account Start -->
<div class="register-account ptb-100 ptb-sm-60">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="register-title">
					<h3 class="mb-10">РЕГИСТРАЦИЯ АККАУНТА</h3>
					<p class="mb-10">Если у вас уже есть учетная запись, пожалуйста, войдите на страницу входа.</p>
				</div>
			</div>
		</div>
		<!-- Row End -->
		<div class="row">
			<div class="col-sm-12">
				<form class="form-register" action="#" method="post">
					@csrf
					<fieldset>
						<legend>Ваши персональные данные</legend>
						<div class="form-group d-md-flex align-items-md-center">
							<label class="control-label col-md-2" for="f-name"><span class="require">*</span>Имя</label>
							<div class="col-md-10">
								<input type="text" name="name" class="form-control" id="f-name" placeholder="Ваш зовут" value="{{old('name')}}">
							</div>
						</div>
						
						<div class="form-group d-md-flex align-items-md-center">
							<label class="control-label col-md-2" for="email"><span class="require">*</span>Введите адрес электронной почты здесь ...</label>
							<div class="col-md-10">
								<input type="text" name="email" class="form-control" id="email" placeholder="Введите адрес электронной почты здесь ..." value="{{old('email')}}">
							</div>
						</div>
						<div class="form-group d-md-flex align-items-md-center">
							<label class="control-label col-md-2" for="number"><span class="require">*</span>Номер телефона</label>
							<div class="col-md-10">
								<input type="text" name="phone" class="form-control" id="number" placeholder="Телефон" value="{{old('phone')}}">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Ваш пароль</legend>
						<div class="form-group d-md-flex align-items-md-center">
							<label class="control-label col-md-2" for="pwd"><span class="require">*</span>Пароль:</label>
							<div class="col-md-10">
								<input type="password" name="password" class="form-control" id="pwd" placeholder="Введите пароль">
							</div>
						</div>
					</fieldset>
					<div class="terms">
						<div class="float-md-right">
							<input type="submit" value="РЕГИСТРАЦИЯ" class="return-customer-btn">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</div>
<!-- Register Account End -->
@endsection