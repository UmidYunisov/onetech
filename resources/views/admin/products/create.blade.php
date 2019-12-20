@extends('admin.template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить товар
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=> 'products.store',
    'method' => 'post',
		'files'	=>	true
	])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем товар</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Название</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{old('title')}}">
            </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Лицевая картинка</label>
              <input type="file" multiple="multiple" id="exampleInputFile" name="images[]">

              <p class="help-block">Какое-нибудь уведомление о форматах..</p>
            </div>
            <div class="form-group">
              <label>Категория</label>
              {{Form::select('category_id', 
                $categories, 
                null, 
                ['class' => 'form-control select2'])
              }}
            </div>
            <div class="form-group">
              <label>Цвет</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="color" value="{{old('color')}}">
            </div>

            <div class="form-group">
              <label>Цена</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" value="{{old('price')}}">
            </div>

            <div class="form-group">
              <label>Скидка</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="discount" value="{{old('discount')}}">
            </div>
            
            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input type="checkbox" class="minimal" name="hot_deals">
              </label>
              <label>
                Горячая предложения
              </label>
            </div>

            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input type="checkbox" class="minimal" name="is_new">
              </label>
              <label>
                Новый
              </label>
            </div>
            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input type="checkbox" class="minimal" name="is_best">
              </label>
              <label>
                Лучшый
              </label>
            </div>
            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input type="checkbox" class="minimal" name="is_active">
              </label>
              <label>
                Активный
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Описание</label>
              <textarea name="text" id="" cols="30" rows="10" class="form-control" >{{old('text')}}</textarea>
          </div>
        </div>
          
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{route('products.index')}}" class="btn btn-default">Назад</a>
          <button class="btn btn-success pull-right">Добавить</button>
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