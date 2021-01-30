<section id="contact">
			<div class="view">
                <img alt class="bg" src="{{ asset('themes/front/at3am')}}/images/placeholders/1920x1200-1.jpg" />

				<div class="content full-size colors-h contactback">
					<div class="container">
						<h2>نسعد بتواصلكم</h2>
						
						<div class="row contactback2">
							<div class="col-md-6">
								<div class="text-right scroll-in-animation" data-animation="fadeInLeft">
									<p class="big-font uppercase contactback2">
										هاتف: <strong class="highlight contactback2" >016444444</strong>
									</p>
									<p class="big-font uppercase contactback2">
										المملكة العربية السعودية - المجمعة
										<br/> طريق الملك عبدالعزيز - ص.ب 117
									</p>
									<p class="big-font ">
										<b class="contactback2">
									<a href="mailto:info@ouraddress.com">info@ouraddress.com</a><br/>
									<a href="http://www.ouraddress.com">www.ouraddress.com</a>
								</b>
									</p>
									<p class="big-font">
										<a target="_blank" href="https://twitter.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-twitter fa-stack-1x text-background"></i></span></a>
										<a target="_blank" href="https://www.facebook.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-facebook fa-stack-1x text-background"></i></span></a>
										<a target="_blank" href="http://www.youtube.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-youtube fa-stack-1x text-background"></i></span></a>
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-left scroll-in-animation" data-animation="fadeInRight">
									<form  data-message-class="colors-d background-95 heading border" action="{{ route('sendemail')}}" method="post" novalidate="novalidate">
									{{ csrf_field()}}	
									<div class="row">
											<div class="col-md-6 control-group">
												<div class="alt-placeholder">Email</div>
												<input type="email" name="email" value="" size="40" placeholder="البريد الإلكتروني" data-validation-required-message="Please fill the required field." required>
												<div class="help-block"></div>
											</div>
											<div class="col-md-6 control-group">
												<div class="alt-placeholder">Name</div>
												<input type="text" name="name" value="" size="40" placeholder="الاسم" data-validation-required-message="Please fill the required field." required>
												<div class="help-block"></div>
											</div>
											
											<div class="col-md-12 control-group">
												<div class="alt-placeholder">Message</div>
												<textarea name="message" placeholder="نص الرسالة" data-validation-required-message="Please fill the required field." required></textarea>
												<div class="help-block"></div>
											</div>
											<div class="col-md-12 form-actions">
												<input class="button" type="submit" value="إرسال">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>