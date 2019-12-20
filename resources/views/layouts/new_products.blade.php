<div class="container mt-50 mb-50">
<div class="tab-content fix">
    <div id="grid-view" class="tab-pane fade show active">
        <div class="row">
            @foreach($is_new as $product)
            <!-- Single Product Start -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="{{route('product.show',$product->id)}}">
                            <img class="primary-img" src="{{$product->getImage()}}" alt="single-product">
                        </a>
                        <a href="#" class="quick_view" @click="func({{$product->id}})" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="{{route('product.show',$product->id)}}">{{$product->title}}</a></h4>
                            <p><span class="price">${{$product->price}}</span></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="#" title="" @click="addToCart({{$product}})" data-original-title="Добавить в корзину"> + Добавить в корзину</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                <a href="#" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
            </div>
            <!-- Single Product End -->
            @endforeach
        </div>
        <!-- Row End -->
    </div>
    

    <!-- Product Pagination Info -->
</div>
</div>