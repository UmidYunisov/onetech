<?php

Breadcrumbs::for('/', function ($trail) {
    $trail->push('Главная', route('index'));
});

Breadcrumbs::for('shop', function ($trail) {
    $trail->parent('/');
    $trail->push('Магазин', route('shop'));
});

Breadcrumbs::for('checkout', function ($trail) {
    $trail->parent('shop');
    $trail->push('Оформить заказ', route('checkout'));
});

Breadcrumbs::for('about', function ($trail) {
    $trail->parent('/');
    $trail->push('О нас', route('about'));
});

Breadcrumbs::for('contacts', function ($trail) {
    $trail->parent('/');
    $trail->push('Контакты', route('contacts'));
});

Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('shop');
    $trail->push($category, route('category.show', $category));
});

Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('shop');
    $trail->push($product->title, route('product.show', $product->id));
});