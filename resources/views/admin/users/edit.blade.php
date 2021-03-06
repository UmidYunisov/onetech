@extends('admin.template')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Редактировать пользователя
			<small>приятные слова..</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		{{Form::open([
			'route'	=>	['users.update', $user->id],
			'method' =>	'put'
			])}}
			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Редактирования пользователя</h3>
					@include('admin.errors')
				</div>
				<div class="box-body">
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Имя</label>
							<input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value="{{$user->name}}">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">E-mail</label>
							<input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="" value="{{$user->email}}">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Пароль</label>
							<input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="">
						</div>
						<div class="form-group">
							<label>
								{{Form::checkbox('is_admin', '1', $user->is_admin, ['class'=>'minimal'])}}
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
					<button class="btn btn-warning pull-right">Изменить</button>
				</div>
				<!-- /.box-footer-->
			</div>
			<!-- /.box -->
			{{Form::close()}}
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@endsection