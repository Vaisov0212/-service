<?php $title="service" ?>

@include('layouts/header')
	<!-- Page top section  -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/2.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2>Our Solutions</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>

				</div>
			</div>
		</div>
	</section>
	<!-- Page top section end  -->
    <br>
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
	<!-- Services section  -->
	<section class="services-2-section spad">
		<div class="container">
			<div class="service-text">
				<h2>A group of productive enterprises that produce or supply Goods, Services, or Sources of Income</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="service-item">
						<div class="si-head">
							<div class="si-icon">
								<img src="img/icons/cogwheel.png" alt="">
							</div>
							<h5>Mechanical Engineering</h5>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-item">
						<div class="si-head">
							<div class="si-icon">
								<img src="img/icons/helmet.png" alt="">
							</div>
							<h5>Profesional Workers</h5>
						</div>
						<p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-item">
						<div class="si-head">
							<div class="si-icon">
								<img src="img/icons/wind-engine.png" alt="">
							</div>
							<h5>Green Energy</h5>
						</div>
						<p>Sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec con-sequat arcu et commodo interdum. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-item">
						<div class="si-head">
							<div class="si-icon">
								<img src="img/icons/pollution.png" alt="">
							</div>
							<h5>Power Engineering</h5>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-item">
						<div class="si-head">
							<div class="si-icon">
								<img src="img/icons/pumpjack.png" alt="">
							</div>
							<h5>Oil & Lubricants</h5>
						</div>
						<p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-item">
						<div class="si-head">
							<div class="si-icon">
								<img src="img/icons/light-bulb.png" alt="">
							</div>
							<h5>Power & Energy</h5>
						</div>
						<p>Sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec con-sequat arcu et commodo interdum. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end  -->

	<!-- Reserch section  -->
	<section class="reserch-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<ul class="nav nav-tabs reserch-tab-menu" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Xizmat turlari haqda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Texnik hizmat</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">O'rnatish xizmati</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">detallarni almashtrish</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">yetqazib berish</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-6" role="tab" aria-controls="tab-6" aria-selected="false">va boshqa hizmatlar</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-8">
					<div class="tab-content reserch-tab">
						<!-- single tab content -->
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
							<h2>We produce or supply Goods, & Services, Oils & Lubricants</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor.</p>
							<p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
						</div>
						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
							<h2>We produce or supply Goods, & Services, Oils & Lubricants</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor.</p>
							<p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis</p>
						</div>
						<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
							<h2>We produce or supply Goods, & Services, Oils & Lubricants</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor.</p>
						</div>
						<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
							<h2>We produce or supply Goods, & Services, Oils & Lubricants</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor.</p>
							<p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
						</div>
						<div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5">
							<h2>We produce or supply Goods, & Services, Oils & Lubricants</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor.</p>
							<p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="tab-6">
							<h2>We produce or supply Goods, & Services, Oils & Lubricants</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor.</p>
							<p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis commodo.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Reserch section end  -->


	<!-- Contact section   -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h2>Get in Touch</h2>
						<p> blandit sollicitudin estst quis, blandit sollicitudi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi</p>
						<div class="header-info-box">
							<div class="hib-icon">
								<img src="img/icons/phone.png" alt="" class="">
							</div>
							<div class="hib-text">
								<h6>+546 990221 123</h6>
								<p>contact@industryalinc.com</p>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-8">
					<form class="contact-form" action="{{route('reference')}}" method="POST" enctype="multipart/form-data">
                        @csrf
						<div class="row">
							<div class="col-lg-6">
								<input type="text" name="name" placeholder="ism familya" required>
							</div>
							<div class="col-lg-6">
								<div class="col-auto">
                                    <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" style=" border: none;border-bottom: 3px solid #c3dff5;background-color: #f7fafd">+998</div>
                                      </div>
                                      <input type="number" name="phone" class="form-control" id="inlineFormInputGroup" placeholder="tel:" required="">
                                    </div>
                                  </div>
							</div>
                            <div class="col-lg-6">
								<input type="text" name="organization" placeholder="idora tashkilot nomi" required="">
							</div>
							<div class="col-lg-6">
								<select name="service_type" style=" width: 100%; height: 54px;    padding: 10px ;font-size: 14px;
                                font-weight: 500;font-style: italic;color: #718090; border: none; background: #f7fafd;
                                 border-bottom: 3px solid #c3dff5; " aria-describedby="validationServer04Feedback">

                                    <option value="texnik xizmat">texnik xizmat</option>
                                    <option value="yangilash">yangilash</option>
                                    <option value="o'rnatib berish">o'rnatib berish</option>
                                  </select>
							</div>
							<div class="col-lg-4">
							</div>
							<div class="col-lg-12">
								<input type="text" name="address" placeholder="to'liq manzil..." required="">
								<button class="site-btn" type="submit">jo'natish</button>
							</div>
						</div>
				    </div>
                </form>
			</div>
		</div>
	</section>
	<!-- Contact section end  -->


        @include('layouts/footer')
