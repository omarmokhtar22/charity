<section id="team">
		
			<div class="view" id="who-we-are">
				<div class="content pane">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 stretch-height pane">
								<div class="view fluid-height">
								<img alt class="bg" src="{{ asset('uploads/news/'.$lastnews->image)}}" />
									<div class="content incut colors-d background-transparent">
										<div class="position-middle-center text-center">
											<a class="button background-lite-c heading-c" href="#work">مشاهدة الخبر</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6  stretch-height pane">
								<div class="view fluid-height">
									<div class="content incut colors-e background-solid">
										<div class="position-middle-center">
											<h3 class="text-left"><span class="highlight">{{ $lastnews->title }}</h3>
											<p class="subtitle highlight">{!! $lastnews->content !!}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>