<template>
	<li>
		<a href="#"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro">{{ $store.state.cartCount }}</span><span>Корзина</span></span></a>
		<ul class="ht-dropdown cart-box-width" v-if="$store.state.cart.length > 0">
			<li>
				<!-- Cart Box Start -->
				<div class="single-cart-box" v-for="item in $store.state.cart"
				:key="item.id">
				<div class="cart-img">
					<a href="#"><img :src="'/img/products/'+item.images[0].filename" alt="cart-image"></a>
					<span class="pro-quantity">{{ item.quantity}}X</span>
				</div>
				<div class="cart-content">
					<h6><a href="product.html">{{ item.title }} </a></h6>
					<span class="cart-price">{{ item.price}}</span>
				</div>
				<a class="del-icone" href="#" @click="removeFromCart(item)"><i class="ion-close"></i></a>
			</div>
			<!-- Cart Box End -->

			<!-- Cart Footer Inner Start -->
			<div class="cart-footer">
				<ul class="price-content">
					<li>Итого: <span>${{ totalPrice }}</span></li>
				</ul>
				<div class="cart-actions text-center">
					<a class="cart-checkout" href="/checkout">Оформить</a>
				</div>
			</div>
			<!-- Cart Footer Inner End -->
		</li>
	</ul>
</li>
</template>

<script>
	export default {
		computed: {
			totalPrice() {
				let total = 0;

				for (let item of this.$store.state.cart) {
					total += item.totalPrice;
				}

				return total.toFixed(2);
			}
		},
		methods: {
			removeFromCart(item) {
				this.$store.commit('removeFromCart', item);
			}
		}
	}
</script>