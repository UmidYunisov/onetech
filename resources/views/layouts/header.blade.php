<header>
    <!-- Header Top Start Here -->
    <div class="header-top-area">
        <div class="container">
            <!-- Header Top Start -->
            <div class="header-top">
                <ul>
                    <li><a href="/">Бесплатная доставка при заказе свыше $99</a></li>
                    <li><a href="/shop">Магазин</a></li>
                    <li><a href="/checkout">Оформить</a></li>
                </ul>
                <ul>
                    <li><a href="#">Личный кабинет<i class="lnr lnr-chevron-down"></i></a>
                        <!-- Dropdown Start -->
                        <ul class="ht-dropdown">
                            @if(Auth::check())
                            <li><a href="/">Мой профиль</a></li>
                            <li><a href="/logout">Выход</a></li>
                            @else
                            <li><a href="/login">Вход</a></li>
                            <li><a href="/register">Регистрация</a></li>
                            @endif
                        </ul>
                        <!-- Dropdown End -->
                    </li> 
                </ul>
            </div>
            <!-- Header Top End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Top End Here -->
    <!-- Header Middle Start Here -->
    <div class="header-middle ptb-15">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-3 col-md-12">
                    <div class="logo mb-all-30">
                        <a href="/"><img src="/img/logo/logo.png" alt="logo-image"></a>
                    </div>
                </div>
                <!-- Categorie Search Box Start Here -->
                <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                    <div class="categorie-search-box">
                        <form action="/search" method="post">
                            @csrf
                            <div class="form-group">
                                <select class="bootstrap-select" name="cat">
                                    <option value="0">Все категории</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->cat_title}}</option>
                                    @endforeach                                    
                                </select>
                            </div>
                            <input type="text" name="query" placeholder="Поиск...">
                            <button type="submit"><i class="lnr lnr-magnifier"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Categorie Search Box End Here -->
                <!-- Cart Box Start Here -->
                <div class="col-lg-4 col-md-12">
                    <div class="cart-box mt-all-30">
                        <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                            
                            <cart-dropdown></cart-dropdown>
                            
                            <li>
                                @if(Auth::check())
                                <a href="#"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong>{{Auth::user()->name}}</strong></span></span></a>
                                @else
                                <a href="/login"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong>Вход</strong></span><span> в кабинет</span></span></a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Cart Box End Here -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Middle End Here -->
    <!-- Header Bottom Start Here -->
    <div class="header-bottom  header-sticky">
        <div class="container">
            <div class="row align-items-center">
             <div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
                <span class="categorie-title">Категории</span>
            </div>                       
            <div class="col-xl-9 col-lg-8 col-md-12 ">
                <nav class="d-none d-lg-block">
                    <ul class="header-bottom-list d-flex">
                        <li class="active">
                            <a href="{{route('index')}}">Главная<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}">Магазин<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">О Нас<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li>
                            <a href="{{route('contacts')}}">Контакты<i class="fa fa-angle-down"></i></a>
                        </li>
                    </ul>
                </nav>
                <div class="mobile-menu d-block d-lg-none">
                    <nav>
                        <ul>
                            <li>
                                <a href="/">Главная</a>
                            </li>
                            <li>
                                <a href="/shop">Магазин</a>
                            </li>
                            <li>
                                <a href="/about">О Нас</a>
                            </li>
                            <li>
                                <a href="/contacts">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Header Bottom End Here -->
<!-- Mobile Vertical Menu Start Here -->
<div class="container d-block d-lg-none">
    <div class="vertical-menu mt-30">
        <span class="categorie-title mobile-categorei-menu">Категории </span>
        <nav>  
            <div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">
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
            </nav>
        </div>
    </div>
    <!-- Mobile Vertical Menu Start End -->
</header>
<!-- Main Header Area End Here -->
<!-- Categorie Menu & Slider Area Start Here -->
<div class="main-page-banner home-3">
    <div class="container">
        <div class="row">
            <!-- Vertical Menu Start Here -->
            <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                <div class="vertical-menu mb-all-30">
                    <nav>
                        <ul class="vertical-menu-list">
                           @foreach($categories as $category)
                           <li class=""><a href="{{route('category.show',$category->id)}}"><span><img src="/img/vertical-menu/{{$category->icon}}" alt="menu-icon"></span>{{$category->cat_title}} @if(count($category->children))<i class="fa fa-angle-right" aria-hidden="true"></i>@endif</a>
                            @if(count($category->children))
                            @include('layouts.menu',['subcategories' => $category->children])
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Vertical Menu End Here -->
    </div>
    <!-- Row End -->
</div>
<!-- Container End -->           
</div>
<!-- Categorie Menu & Slider Area End Here -->
