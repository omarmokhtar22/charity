<!-- footer -->
<div class=" footer">
		<div class="container contact__container">
			<div class="row">
				<div class="col">
					<h1>اتصل بنا</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="d-flex telephone">
						<i class="fa fa-phone"></i>
						<div class="d-flex flex-column">
							هاتف <span>{{ $shareddata['contact']->phone}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="d-flex location">
						<i aria-hidden="true" class="fa fa-map-marker"></i>
						<div class="d-flex flex-column">
							العنوان <span>{{ $shareddata['contact']->address}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="d-flex email">
						<i aria-hidden="true" class="fa fa-envelope-open"></i>
						<div class="d-flex flex-column">
							البريد الاالكتروني <span>{{ $shareddata['contact']->email}}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<hr>
			<div class="row">
				<div class="col">
					<div class="text-center copyrights">
						جميع الحقوق محفوظه لجمعية تحفيظ القران المجمعة 2021
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="seetings">
		<div id="scroll-top">
			<i class="fa fa-arrow-up fa-2x"></i>
		</div>
	</div>