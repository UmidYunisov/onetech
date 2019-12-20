@extends('admin.template')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Изменить товар
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
   {{Form::open([
    'route'	=>	['products.update', $product->id],
    'files'	=>	true,
    'method'	=>	'put'
    ])}}
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Обновляем товар</h3>
        @include('admin.errors')
      </div>
      <div class="box-body">
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Название</label>
            <input type="text"= class="form-control" id="exampleInputEmail1" placeholder="" value="{{$product->title}}" name="title">
          </div>

          <div class="form-group">
            <img src="" alt="" class="img-responsive" width="200">
            <label for="exampleInputFile">Лицевая картинка</label>
            <input type="file" multiple="multiple" id="exampleInputFile" name="images[]">
            <div class="row">
              <div class="col-xs-6 col-md-3">
                @foreach($product->images as $image)
                <a href="/img/products/{{$image->filename}}" class="thumbnail">
                  <img src="/img/products/{{$image->filename}}" width="150px">
                </a>
                <a href="{{route('products.deleteImage',['image_id' => $image->id, 'product_id' => $product->id])}}">Удалит картинку</a>
                @endforeach
              </div>
            </div>
          </div>
          @include('admin.categories.form')
          <!-- checkbox -->
          <div class="form-group">
            <label>
              {{Form::checkbox('is_new', '1', $product->is_new, ['class'=>'minimal'])}}
            </label>
            <label>
              Новый
            </label>
          </div>
          <!-- checkbox -->
          <div class="form-group">
            <label>
              {{Form::checkbox('is_active', '1', $product->is_active, ['class'=>'minimal'])}}
            </label>
            <label>
              Активный
            </label>
          </div>
          <!-- checkbox -->
          <div class="form-group">
            <label>
              {{Form::checkbox('hot_deals', '1', $product->hot_deals, ['class'=>'minimal'])}}
            </label>
            <label>
              Горячые предложении
            </label>
          </div>
          <!-- checkbox -->
          <div class="form-group">
            <label>
              {{Form::checkbox('is_best', '1', $product->is_best, ['class'=>'minimal'])}}
            </label>
            <label>
              Лучшый
            </label>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Цена</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$product->price}}" name="price">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Скидка</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$product->discount}}" name="discount">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Описание</label>
            <textarea name="text" id="" cols="30" rows="10" class="form-control" >{{$product->text}}</textarea>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
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