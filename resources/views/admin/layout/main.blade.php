<!DOCTYPE html>
<html lang="vi">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị website</title>
	<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
	<script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.umd.js"></script>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="{{asset("css/backend/bootstrap.min.css")}}">
	<link rel="stylesheet" href="{{asset("font-awesome/css/font-awesome.min.css")}}">
	<link rel="stylesheet" href="{{asset("css/backend/ionicons.min.css")}}">
	<link rel="stylesheet" href="{{asset("css/backend/jquery-ui.css")}}">
	<link rel="stylesheet" href="{{asset("css/backend/bootstrap-datepicker.min.css")}}">
	<link rel="stylesheet" href="{{asset("css/backend/AdminLTE.css")}}">
	<link rel="stylesheet" href="{{asset("css/backend/_all-skins.min.css")}}">
	<link rel="stylesheet" href="{{asset("css/backend/morris.css")}}">
	<link rel="stylesheet" href="{{asset("css/backend/style.css")}}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="{{ url('admin/layout/index') }}" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>WEB</b></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg">
					QUẢN TRỊ WEBSITE
				</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">Adminstrator <i class="fa fa-caret-down"></i></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div class="text-center">
										<a href="myLogin/logout" class="btn btn-default btn-flat">Đăng xuất</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
					<li>
						<a href="{{ url('admin/layout/index') }}"><i class="fa fa-home"></i><span> Trang chủ</span></a>
					</li>
					<li>
						<a href="{{ url('admin/gioithieu/update/1') }}"><i class="fa fa-info-circle"></i><span> Giới thiệu</span></a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-edit"></i>
							<span>Bài viết</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="display: none;">
							<li>
								<a href="{{ url('admin/danhmucbaiviet/index') }}"><i class="fa fa-table"></i><span> Danh mục</span></a>
							</li>
							<li>
								<a href="{{ url('admin/baiviet/index') }}"><i class="fa fa-edit"></i><span> Bài viết</span></a>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-edit"></i>
							<span>Sản phẩm</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="display: none;">
							<li>
								<a href="{{ url('admin/danhmucsanpham/index') }}"><i class="fa fa-table"></i><span> Danh mục sản phẩm</span></a>
							</li>
							<li>
								<a href="{{ url('admin/sanpham/index') }}"><i class="fa fa-shopping-cart"></i><span> Sản phẩm</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ url('admin/slider/index') }}"><i class="fa fa-picture-o"></i><span> Slider</span></a>
					</li>
					<!-- <li>
		                    <a href="{{ url('admin/thongtinlienhe/index') }}"><i class="fa fa-comments"></i><span> Thông tin liên hệ</span></a>
		                </li> -->
					<li>
						<a href="{{ url('admin/cauhinh/update/1') }}"><i class="fa fa-cog"></i><span> Cấu hình</span></a>
					</li>
					<li>
						<a href="{{ url('admin/cauhinhseo/update/1') }}"><i class="fa fa-rocket"></i><span> Cấu hình seo</span></a>
					</li>
					<li>
						<a href="{{ url('admin/user/index') }}"><i class="fa fa-users"></i><span> Users</span></a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			@yield('content')
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 4.0
			</div>
			Copyright &copy; 2019
		</footer>
	</div>
	<!-- ./wrapper -->
	<script src="{{asset("js/backend/jquery.min.js")}}"></script>
	<script src="{{asset("js/backend/jquery-ui.js")}}"></script>
	<script src="{{asset("js/backend/moment.min.js")}}"></script>
	<script src="{{asset("js/backend/bootstrap.min.js")}}"></script>
	<script src="{{asset("js/backend/raphael.min.js")}}"></script>
	<script src="{{asset("js/backend/morris.min.js")}}"></script>
	<script src="{{asset("js/backend/adminlte.min.js")}}"></script>
	<script>
		const {
			ClassicEditor,
			Bold,
			Essentials,
			Italic,
			Mention,
			Paragraph,
			Undo,
			Heading,
			Link,
			List,
			Indent,
			Image,
			BlockQuote,
			Table,
			TableToolbar,
			MediaEmbed,
			ImageToolbar,
			ImageResize,
			ImageCaption,
			ImageStyle,
			ImageInsert,
			GeneralHtmlSupport,
			CodeBlock,
			Underline,
			Strikethrough,
			FontColor,
			FontSize,
			Alignment,
			Autoformat,
			FontFamily,
			SourceEditing,
			ImageTextAlternative,
		} = CKEDITOR;

		const configToolbarItems = [
			"undo",
			"redo",
			"|",
			"heading",
			"bold",
			"italic",
			"underline",
			"strikethrough",
			"|",
			"fontSize",
			"fontFamily",
			"fontColor",
			"|",
			"alignment",
			"indent",
			"blockQuote",
			"|",
			"link",
			"insertTable",
			"imageInsert",
			"imageTextAlternative",
			"mediaEmbed",
			"|",
			"sourceEditing",
		];

		const configPlugins = [
			Essentials,
			Bold,
			Italic,
			FontFamily,
			FontSize,
			FontColor,
			Paragraph,
			Undo,
			Heading,
			Link,
			List,
			Indent,
			Image,
			ImageInsert,
			BlockQuote,
			Table,
			TableToolbar,
			MediaEmbed,
			ImageToolbar,
			ImageResize,
			ImageCaption,
			ImageStyle,
			CodeBlock,
			Underline,
			Strikethrough,
			Alignment,
			Autoformat,
			SourceEditing,
			ImageTextAlternative,
			GeneralHtmlSupport,
		];

		const uploadAdapter = (loader) => {
			return {
				upload: function() {
					return new Promise((resolve, reject) => {
						loader.file.then(async (file) => {
							try {
								const body = new FormData();
								body.append("file", file);
								body.append("path", "baiviet");

								const response = await fetch("/api/upload", {
									method: "POST",
									body: body,
								});

								const result = await response.json();

								if (!response.ok) {
									throw new Error(result.error || "Upload failed");
								}


								resolve({
									default: result.url,
								});
							} catch (error) {
								console.error("Upload error:", error);
								reject(error);
							}
						});
					});
				},
			};
		};

		const uploadPlugin = (editor) => {
			editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
				return uploadAdapter(loader);
			};
		};
		const addIdsToHeadings = () => {
			const editorContent = document.querySelector("#editor").value;
			const parser = new DOMParser();
			const doc = parser.parseFromString(editorContent, "text/html");

			const headers = doc.querySelectorAll("h1, h2, h3, h4, h5, h6");

			headers.forEach((header, index) => {
				const text = header.textContent.trim().toLowerCase().replace(/\s+/g, "-"); // Tạo ID từ nội dung tiêu đề
				header.id = `heading-${index}-${text}`;
			});

			// Cập nhật lại nội dung CKEditor sau khi đã thêm ID
			document.querySelector("#editor").value = doc.body.innerHTML;
		};

		const editorObject = document.querySelector("#editor");
		
		if (editorObject) {
			ClassicEditor.create(editorObject, {
					plugins: configPlugins,
					toolbar: configToolbarItems,
					image: {
						styles: ["alignLeft", "alignCenter", "alignRight"],
						toolbar: [
							"resizeImage:50",
							"resizeImage:75",
							"resizeImage:original",
							"toggleImageCaption",
							"imageStyle:alignLeft",
							"imageStyle:alignCenter",
							"imageStyle:alignRight",
						],
						resizeOptions: [{
								name: "resizeImage:original",
								value: null,
								icon: "original",
							},
							{
								name: "resizeImage:custom",
								value: "custom",
								icon: "custom",
							},
							{
								name: "resizeImage:50",
								value: "50",
								icon: "medium",
							},
							{
								name: "resizeImage:75",
								value: "75",
								icon: "large",
							},
						],
					},
					link: {
						addTargetToExternalLinks: true,
						decorators: [{
							mode: "manual",
							label: "External Link",
							attributes: {
								target: "_blank",
							},
						}, ],
					},
					heading: {
						options: [
							{
							model: "paragraph",
							view: {
								name: "p",
								classes: "ck-heading_paragraph",
								converterPriority: "high",
							},
							title: "Paragraph",
							},
							{
							model: "heading2",
							view: {
								name: "h3",
								classes: "ck-heading_heading2",
								converterPriority: "high",
							},
							title: "Heading 2",
							},
							{
							model: "heading3",
							view: {
								name: "h4",
								classes: "ck-heading_heading3",
								converterPriority: "high",
							},
							title: "Heading 3",
							},
						],
						},
				})
				.then((editor) => {
					editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
						return uploadAdapter(loader);
					};
					editor.model.document.on('change:data', () => {
						document.querySelector("#editor").value = editor.getData();
						addIdsToHeadings();
					});
				})
				.catch((error) => console.log(error));
		}
	</script>
	<script src="{{asset("js/backend/demo.js")}}"></script>
	<script src="{{asset("js/backend/custom.js")}}"></script>
</body>

</html>