@extends('layout')



@section('content')

@include('layoutHeader')


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">Your Message</h3>
						<p> empowering the less previlleged who are in need of education and complement the efforts of hard-working students in schools                     
                        </p>
						
						<form class="form-light mt-20" role="form">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Your name">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" placeholder="Phone number">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Subject">
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>
							<button type="submit" class="btn btn-two">Send message</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">JOHN DUMBUYA Charity Foundation</h3>
								<div class="contact-info">
									<h5>Address</h5>
                                    <p>John Dumbuya Drive Leicester Road Freetown</p>
                                    <p>Sierra Leone West Africa</p>
									
									<h5>Email</h5>
									<p>iJohndumbuyacharityfoundation@gmail.com</p>
									
									<h5>Phone</h5>
									<p>+1xxx --xxx--xxx</p>
								</div>
							</div> 
						</div> 						
					</div>
				</div>
			</div>
	<!-- /container -->

    
@endsection

