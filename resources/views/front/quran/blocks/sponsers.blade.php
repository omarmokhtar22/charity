<div class=" container sponsers">
		<div class="row">
			<div class="col">
				<h1>رعاة الجمعية</h1>
				<p>نفخر بالتعاون مع الرعاة</p>
				<div class="carousel slide" data-ride="carousel" id="sponsersslider">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="d-flex justify-content-between align-items-center">
                                @foreach($data['sponsers'] as $sponser)
                                <img alt="First slide" class="d-block" src="{{ asset('uploads/sponser/'.$sponser->image)}}"> 
                              @endforeach
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>