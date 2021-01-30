<div id="aboutchairty">
		<div class="container p-5">
			<div class="row">
				<div class="col text-center">
					<h1>{{ $data['aboutus']->title}}</h1>
					<p>{!! $data['aboutus']->content !!}</p>
					<a class="btn orange_btn animate__animated animate__fadeInDown animate__slow" href="/pages/{{ $data['aboutus']->id}}/{{ $data['aboutus']->slug}}">المزيد عن الجمعية</a>
				</div>
			</div>
		</div>
    </div>