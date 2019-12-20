@extends('admin.template')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Редактировать категорию
      <small>приятные слова..</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      {!! Form::open(['route'=>['categories.update',$category->id],  'method' => 'put']) !!}
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем категорию</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            @include('admin.categories.form')
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{route('categories.index')}}" class="btn btn-default">Назад</a>
          <button type="submit" class="btn btn-success pull-right">Изменить</button>
        </div>
        <!-- /.box-footer-->
        {!! Form::close() !!}
      </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection