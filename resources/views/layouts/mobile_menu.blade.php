<ul class="category-sub">
@foreach($subcategories as $subcategory)
    @if(count($subcategory->children))<li class="has-sub">@else<li>@endif<a href="{{route('category.show',$subcategory->id)}}">{{$subcategory->cat_title}}</a>
        <!-- category submenu end-->
    @if(count($subcategory->children))
        @include('layouts.mobile_menu',['subcategories' => $subcategory->children])
    @endif
    <!-- category submenu end-->
    </li>    
@endforeach
</ul>
