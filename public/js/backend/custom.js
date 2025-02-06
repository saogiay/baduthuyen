
// $.widget.bridge('uibutton', $.ui.button);
// CKEDITOR.replace( 'post_content' );
$( function() {
    $( "#datepicker" ).datepicker({
    	dateFormat: 'yy-mm-dd',
    	language: 'vi'
    });
});


// Đếm ký tự thẻ title

function CountLeft(field, count, max)
{
	if (field.value.length > max)
	field.value = field.value.substring(0, max);
	else
	count.value = max - field.value.length;
}

// Đếm ký tự thẻ description
function CountRight(field, count, max)
{
	if (field.value.length > max)
	field.value = field.value.substring(0, max);
	else
	count.value = max - field.value.length;
}

$(document).ready(function(){
	$("#changePassword").change(function(){
		if($(this).is(":checked")){
			$(".password").removeAttr('disabled');
		}else{
			$(".password").attr('disabled', '');
		}
	});
});

//Tìm kiếm ajax danh mục bài viết
$('.search-key-danh-muc-bai-viet').on('input', function() {
    var key_word = $(this).val();
    var csrf_token = $('.csrf_token').val();

    if (key_word === '') {
    	return false;
    }
    $.ajax({
    	url: 'ajax/filter/danhmucbaiviet',
    	method: 'POST',
    	data: {
    		'key_word': key_word,
    		"_token": csrf_token,
    	}
    }).done(function(response){
		var html = '';
		if (response.length == 0) {
			$('.table-danhmucbaiviet-body').html('');
		}

		response.forEach(function(post, index) {
			var status = 'Hiển thị';
			var status_sidebar = 'Hiển thị';
			if (post.status === 0 || post.status === 2) {
				status = 'Không hiển thị';
			}

			html += `<tr>
				<td class="text-center">${index+1}</td>
				<td width="15%">${post.name}</td>
				<td width="15%">${status}</td>
				<td class="text-center">
					<a class="nut-chuc-nang" href="admin/danhmucbaiviet/update/${post.id}" title="Sửa dữ liệu">
						<i class="fa fa-edit"></i>
					</a>
				</td>
				<td class="text-center">
					<a class="text-danger nut-chuc-nang" href="admin/danhmucbaiviet/delete/${post.id}" title="Xóa dữ liệu" onclick="return confirm('Bạn có muốn xóa không ?')">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>`;
		});
		$('.paginate-page').addClass('paginate-display-non');
		$('.table-danhmucbaiviet-body').html(html);
    }).fail(function() {
    	console.log('failed')
    	$('.table-danhmucbaiviet-body').html('');
    });
});

//Tìm kiếm ajax bài viết
$('.search-key').on('input', function() {
    var key_word = $(this).val();
    var csrf_token = $('.csrf_token').val();

    if (key_word === '') {
    	return false;
    }
    $.ajax({
    	url: 'ajax/filter/baiviet',
    	method: 'POST',
    	data: {
    		'key_word': key_word,
    		"_token": csrf_token,
    	}
    }).done(function(response){
		var html = '';
		if (response.length == 0) {
			$('.table-posts-body').html('');
		}

		response.forEach(function(post, index) {
			var status = 'Hiển thị';
			if (post.status === 0 || post.status === 2) {
				status = 'Không hiển thị';
			}

			html += `<tr>
				<td class="text-center">${index+1}</td>
				<td width="6%"><img src="public/upload/baiviet/${post.anhdaidien}" class="img-responsive image_baiviet_backend"></td>
				<td width="30%">${post.name}</td>
				<td width="12%">${post.danhmucbaiviet.name}</td>
				<td width="8%">${status}</td>
				<td class="text-center">
					<a class="nut-chuc-nang" href="admin/baiviet/update/${post.id}" title="Sửa dữ liệu">
						<i class="fa fa-edit"></i>
					</a>
				</td>
				<td class="text-center">
					<a class="text-danger nut-chuc-nang" href="admin/baiviet/delete/${post.id}" title="Xóa dữ liệu" onclick="return confirm('Bạn có muốn xóa không ?')">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>`;
		});
		$('.paginate-page').addClass('paginate-display-non');
		$('.table-posts-body').html(html);
    }).fail(function() {
    	console.log('failed')
    	$('.table-posts-body').html('');
    });
});

$('.cancel-search').click(function(event) {
	location.reload();
});


//Tìm kiếm ajax danh mục sản phẩm
$('.search-key-danh-muc-san-pham').on('input', function() { 
    var key_word = $(this).val();
    var csrf_token = $('.csrf_token').val();

    if (key_word === '') {
    	return false;
    }
    $.ajax({
    	url: 'ajax/filter/danhmucsanpham',
    	method: 'POST',
    	data: {
    		'key_word': key_word,
    		"_token": csrf_token,
    	}
    }).done(function(response){
		var html = '';
		if (response.length == 0) {
			$('.table-danhmucsanpham-body').html('');
		}

		response.forEach(function(post, index) {
			var status = 'Hiển thị';
			var status_page = 'Hiển thị';
			if (post.status === 0 || post.status === 2) {
				status = 'Không hiển thị';
			}
			if (post.status_page === 0 || post.status_page === 2) {
				status_page = 'Không hiển thị';
			}

			html += `<tr>
				<td class="text-center">${index+1}</td>
				<td width="15%">${post.name}</td>
				<td width="15%">${post.danhmuccha_id.name}</td>
				<td width="15%">${status}</td>
                <td width="15%">${status_page}</td>
				<td class="text-center">
					<a class="nut-chuc-nang" href="admin/danhmucsanpham/update/${post.id}" title="Sửa dữ liệu">
						<i class="fa fa-edit"></i>
					</a>
				</td>
				<td class="text-center">
					<a class="text-danger nut-chuc-nang" href="admin/danhmucsanpham/delete/${post.id}" title="Xóa dữ liệu" onclick="return confirm('Bạn có muốn xóa không ?')">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>`;
		});
		$('.paginate-page').addClass('paginate-display-non');
		$('.table-danhmucsanpham-body').html(html);
    }).fail(function() {
    	console.log('failed')
    	$('.table-danhmucsanpham2-body').html('');
    });
});

//Tìm kiếm ajax sản phẩm
$('.search-key-san-pham').on('input', function() { 
    var key_word = $(this).val();
    var csrf_token = $('.csrf_token').val();

    if (key_word === '') {
    	return false;
    }
    $.ajax({
    	url: 'ajax/filter/sanpham',
    	method: 'POST',
    	data: {
    		'key_word': key_word,
    		"_token": csrf_token,
    	}
    }).done(function(response){
		var html = '';
		if (response.length == 0) {
			$('.table-sanpham-body').html('');
		}

		response.forEach(function(post, index) {
            var status = 'Hiển thị';
			if (post.status === 0 || post.status === 2) {
				status = 'Không hiển thị';
			}
			html += `<tr>
				<td class="text-center">${index+1}</td>
				<td width="6%"><img src="public/upload/sanpham/${post.anhdaidien}" class="img-responsive image_baiviet_backend"></td>
				<td width="30%">${post.name}</td>
				<td width="12%">${post.danhmucsanpham.name}</td>
				<td width="15%">${status}</td>
				<td class="text-center">
					<a class="nut-chuc-nang" href="admin/sanpham/update/${post.id}" title="Sửa dữ liệu">
						<i class="fa fa-edit"></i>
					</a>
				</td>
				<td class="text-center">
					<a class="text-danger nut-chuc-nang" href="admin/sanpham/delete/${post.id}" title="Xóa dữ liệu" onclick="return confirm('Bạn có muốn xóa không ?')">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>`;
		});
		$('.paginate-page').addClass('paginate-display-non');
		$('.table-sanpham-body').html(html);
    }).fail(function() {
    	console.log('failed')
    	$('.table-sanpham-body').html('');
    });
});
