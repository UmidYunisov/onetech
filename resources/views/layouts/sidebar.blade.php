<div class="sidebar">
    <!-- Sidebar Electronics Categorie Start -->
    <div class="electronics mb-40">
        <h3 class="sidebar-title">Категории</h3>
        <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
            <ul>
                @foreach($categories as $category)
                @if(count($category->children))
                <li class="has-sub">
                    @else
                    <li>
                        @endif
                        <a href="{{route('category.show',$category->id)}}">{{$category->cat_title}} </a>
                        @if(count($category->children))
                        @include('layouts.mobile_menu',['subcategories' => $category->children])
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- category-menu-end -->
        </div>
        <!-- Sidebar Electronics Categorie End -->
        <!-- Price Filter Options Start -->
        <form action="{{route('filter')}}" method="post" class="sidbar-style">
            @csrf
        <div class="search-filter mb-40">
            <h3 class="sidebar-title">Цена</h3>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">От</label>
                <input type="text" class="form-control" name="min_price" placeholder="" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">До</label>
                <input type="text" class="form-control" name="max_price" placeholder="">
              </div>
            </div>
        </div>
        <!-- Price Filter Options End -->
        <!-- Sidebar Categorie Start -->
        <div class="sidebar-categorie mb-40">
            <h3 class="sidebar-title">По категориям</h3>
            <ul class="sidbar-style">
                @foreach($categories as $category)
                <li class="form-check">
                    <input class="form-check-input" name="category" value="{{$category->id}}" type="checkbox">
                    <label class="form-check-label" for="camera">{{$category->cat_title}}</label>
                </li>
                @endforeach
            </ul>
            <input type="submit" name="submit" value="Показать" class="return-customer-btn">
        </div>
        </form>
        <!-- Sidebar Categorie Start -->
        
                               
        <!-- Single Banner Start -->
        <div class="col-img">
            <a href="/"><img src="/img/banner/banner-sidebar.jpg" alt="slider-banner"></a>
        </div>
        <!-- Single Banner End -->
    </div>