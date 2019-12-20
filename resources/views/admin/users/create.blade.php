@extends('admin.template')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Добавить пользователя
			<small>приятные слова..</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		{{Form::open(['route' => 'users.store', 'method' => 'post'])}}
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Добавляем пользователя</h3>
				@include('admin.errors')
			</div>
			<div class="box-body">
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleInputEmail1">Имя</label>
						<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">E-mail</label>
						<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Пароль</label>
						<input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="">
					</div>
					<div class="form-group">
						<label>
							<input type="checkbox" name="is_admin" class="minimal" name="is_admin">
						</label>
						<label>
							Админ
						</label>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
				<a href="{{route('users.index')}}" class="btn btn-default">Назад</a>
				<button class="btn btn-success pull-right">Добавить</button>
			</div>
			<!-- /.box-footer-->
		</div>
		<!-- /.box -->
	{{Form::close()}}
	</section>
	<!-- /.content -->
</div>
@endsection