<template>
	<div class="your-order">
		<h3>Ваш заказ</h3>
		<div class="your-order-table table-responsive">
			<table>
				<thead>
					<tr>
						<th class="product-name"><b>Продукт</b></th>
						<th class="product-total"><b>Сумма</b></th>
					</tr>
				</thead>
				<tbody>
					<tr class="cart_item" v-for="item in $store.state.cart"
					:key="item.id">
					<td class="product-name">
						{{ item.title }} <span class="product-quantity"> × {{ item.quantity}}</span>
					</td>
					<td class="product-total">
						<span class="amount">${{item.price}}</span>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr class="order-total">
					<th>Общая сумма к оплате</th>
					<td><span class=" total amount">${{ totalPrice }}</span>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>

</div>
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
		}
	}
</script>