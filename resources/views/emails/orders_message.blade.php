<h4>Спасибо, ваш заказ оформлен, ожидайте звонка менеджера</h4>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Товар</th>
			<th>Количество</th>
			<th>Цена</th>
		</tr>
	</thead>
	<tbody>
		@foreach($owner as $item)
		<tr>
			<td>{{$item->title}}</td>
			<td>{{$item->quantity}}</td>
			<td>${{$item->totalPrice}}</td>
		</tr>
		@endforeach

	</tbody>
</table>