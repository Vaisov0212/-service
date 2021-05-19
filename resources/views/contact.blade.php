<?php $title="Bog`lanish"; ?>
@include('layouts/header')


	<!-- Page top section  -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2>Contact</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>
					<a href="" class="site-btn">Say hello</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top section end  -->

	<!-- Map section  -->
	<div class="map-section">
		<div class="container">
			<div class="map-info">
				<img src="img/logo-contact.png" alt="">
				<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>
			</div>
		</div>
		<div class="map">

            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uzbekistan,urganch&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

			{{-- <iframe src="https://maps.google.com/maps?q=uzbekistan%20hazorasp%20karvak&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0" allowfullscreen></iframe> --}}
            {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uzbekistan%20hazorasp%20karvak&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">interactive google maps for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> --}} --}}

        </div>
	</div>
    <br>
	<!-- Map section end  -->
    <div class="row">
        <div class="col-lg-12">
            @if(count($errors) > 0 )
            <div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                <ul>
                     @foreach($errors->all() as $error )
                     <li>{{$error }} </li>
                     @endforeach
               </ul>
              </div>
            @endif
            @if(\Session::has('success'))
                <div style="padding: 10px; text-align:center;">
                    <div class="alert alert-primary" role="alert"><i class=""></i>
                    {{\Session::get('success')}}
                    </div>
                </div>
            @endif
        </div>
    </div><!--/.row-->
	<!-- Contact section   -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h2>Get in Touch</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi</p>
						<div class="header-info-box">
							<div class="hib-icon">
								<img src="img/icons/phone.png" alt="" class="">
							</div>
							<div class="hib-text">
								<h6>+546 990221 123</h6>
								<p>contact@industryalinc.com</p>
							</div>
						</div>
						<div class="header-info-box">
							<div class="hib-icon">
								<img src="img/icons/map-marker.png" alt="" class="">
							</div>
							<div class="hib-text">
								<h6>Main Str, no 23</h6>
								<p>NY, New York PK 23589</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="contact-form" method="POST" action="{{route('messege')}}" enctype="multipart/form-data" >
                        @csrf
						<div class="row">
							<div class="col-lg-6">
								<input name="name"  type="text" placeholder="Ism, famlya" required >
							</div>
							<div class="col-lg-6">
								<input name="email" type="text" placeholder="E-mail" required>
							</div>
							<div class="col-lg-4">
							</div>
							<div class="col-lg-12">
								<input name="subject" type="text" placeholder="Subject" required>
								<textarea name="massege" class="text-msg" placeholder="Message" required></textarea>
								<button class="site-btn" type="submit">habarni yuborish</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end  -->


@include('layouts/footer')
