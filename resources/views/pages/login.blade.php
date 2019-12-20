@extends('template')

@section('content')
<!-- LogIn Page Start -->
<div class="log-in ptb-100 ptb-sm-60">
	<div class="container">
		<div class="row justify-content-center">
			<!-- Returning Customer Start -->
			<div class="col-md-6">
				<div class="well">
					<div class="return-customer">
						<h3 class="mb-10 custom-title">Авторизация</h3>			
						<form action="/login" method="post">
							@csrf
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" placeholder="Введите адрес электронной почты здесь ..." id="input-email" class="form-control">
							</div>
							<div class="form-group">
								<label>Пароль</label>
								<input type="password" name="password" placeholder="Пароль" id="input-password" class="form-control">
							</div>
							<p class="lost-password"><a href="forgot-password.html">Забили пароль?</a></p>
							<input type="submit" value="Вход" class="return-customer-btn">
						</form>
					</div>
				</div>
			</div>
			<!-- Returning Customer End -->
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</div>
<!-- LogIn Page End -->
@endsection