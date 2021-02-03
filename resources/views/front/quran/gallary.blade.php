@extends('front.quran.layout_pages')
@section('content')
<div class="intenal_hero">
		<div class="container page_title animate__animated animate__fadeInRight animate__slow animate__delay-4s pr-3 mt-2">
			<div class="row">
				<div class="col">
					<h1>عنوان الصفحة</h1>
					<div class="breadcrumbcustom">
						<a href="">الرئيسية</a> | <a class="active" href="">عنوان الصفحة</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end pageheader section -->
	<!-- start pagecontnent -->
	<div class="container">
		<div class="pagesContent">
			<div class="newsarchive row">
				<div class="col-md-4 col-sm-12">
					<div class="card">
						<img alt="Card image cap" class="card-img-top" src="https://pbs.twimg.com/media/EsLyZpgW8AIXxUg?format=jpg&name=large">
						<div class="card-body">
							<h5 class="card-title">عنوان الالبوم </h5><a class="btn orange_btn" href="#">مشاهدة البوم الصور</a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="Pagination">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">السابق</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">التالي</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div><!-- end pagecontnent -->
