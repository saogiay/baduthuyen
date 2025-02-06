<div>Họ tên: {{ $hoten }}</div><br>
<div>Điện thoại: {{ $dienthoai }}</div><br>
<div>Email: {{ $email }}</div><br>
<div>Tổng tiền: {{ number_format($tongtien) }} VNĐ</div><br>
<div>Giá bán / Cái: {{ number_format($tongtien / $soluong) }} VNĐ</div><br>
<div>Thông tin chi tiết: </div><br>
<table style="border: 1px solid #ccc; text-align: left; padding: 5px;">
	<thead>
		<tr>
			<th style="border-right: 1px solid #ccc;">Số lượng</th>
			<th style="border-right: 1px solid #ccc;">Chiều cao</th>
			<th style="border-right: 1px solid #ccc;">Chiều rộng</th>
			<th style="border-right: 1px solid #ccc;">Chiều ngang</th>
			<th style="border-right: 1px solid #ccc;">Quai xách</th>
			<th style="border-right: 1px solid #ccc;">Chất liệu</th>
			<th style="border-right: 1px solid #ccc;">Định lượng</th>
			<th style="border-right: 1px solid #ccc;">Mặt in</th>
			<th>Cán nilon</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border-right: 1px solid #ccc;">{{ $soluong }}</td>
			<td style="border-right: 1px solid #ccc;">{{ $chieucao }}</td>
			<td style="border-right: 1px solid #ccc;">{{ $chieungang }}</td>
			<td style="border-right: 1px solid #ccc;">{{ $chieurong }}</td>
			<td style="border-right: 1px solid #ccc;">
				@if($quaixach == 1)
					Quai giấy xoắn
				@endif
				@if($quaixach == 2)
					Quai dù óng
				@endif
				@if($quaixach == 3)
					Quai dù thường
				@endif
			</td>
			<td style="border-right: 1px solid #ccc;">{{ $chatlieu }}</td>
			<td style="border-right: 1px solid #ccc;">
				@if($dinhluong == 1)
					250
				@endif
				@if($dinhluong == 2)
					300
				@endif
			</td>
			<td style="border-right: 1px solid #ccc;">
				@if($matin == 1)
					In 2 mặt giống nhau
				@endif
				@if($matin == 2)
					In 2 mặt khác nhau
				@endif
			</td>
			<td>
				@if($cannilon == 1)
					Cán màng bóng
				@endif
				@if($cannilon == 2)
					Cán màng mờ
				@endif
			</td>
		</tr>
	</tbody>
</table>