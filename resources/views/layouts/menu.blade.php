<ul class="ht-dropdown mega-child">
@foreach($subcategories as $subcategory)
    <li><a href="{{route('category.show',$subcategory->id)}}">{{$subcategory->cat_title}} @if(count($subcategory->children))<i class="fa fa-angle-right"></i>@endif</a>
        <!-- category submenu end-->
    @if(count($subcategory->children))
        @include('layouts.menu',['subcategories' => $subcategory->children])
    @endif
    <!-- category submenu end-->
    </li>    
@endforeach
</ul>