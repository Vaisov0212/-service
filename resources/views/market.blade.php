<?php $title="Market" ?>
@include('layouts/header')

<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="{{asset('img/page-top-bg/3.jpg')}}">
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

<!-- Blog section  -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8 sidebar order-2 order-lg-1">
                <div class="sb-widget">
                    <form class="sb-search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="sb-widget">
                    <h2 class="sb-title">Turkumlar</h2>
                    <ul>
                        @foreach ($category as $item)
                        <li><a href="{{route('market',$item->id)}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="sb-widget">
                    <h2 class="sb-title">yangi tavarlar</h2>
                    @foreach ($fours as $four)
                    <div class="recent-post">
                        <div class="rp-item">
                            <img src="/upload/shop_images/{{$four->shop_img}}"  alt="">
                            <div class="rp-text">
                                <p>All you need to know about Oil</p>
                                <div class="rp-date">{{$four->created_at->format("Y-M -d H:m")}}}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="sb-widget">
                    <div class="info-box">
                        <h3>Contact Us for Help</h3>
                        <p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. </p>
                        <div class="footer-info-box">
                            <div class="fib-icon">
                                <img src="{{asset('img/icons/phone.png')}}" alt="" class="">
                            </div>
                            <div class="fib-text">
                                <p>+546 990221 123<br>contact@industryalinc.com</p>
                            </div>
                        </div>
                        <a href="#">Send us a message</a>
                    </div>
                    <a href="" class="site-btn w-100">Download Brochure</a>
                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2">


<!-- Team section -->
<section class="team-section spad">
    <div class="container">

        <div class="row">
            @foreach ($model as $item )
            <div class="col-md-4">
                <div class="team-member">
                    <img width="100%" src="/upload/shop_images/{{$item->shop_img}}" alt="">
                    <div class="member-info">
                        <h5>{{$item->name}}</h5>
                        <br>
                        <div style="display: flex;" >
                        <button href="#" class="btn btn-sm btn-success"><a style="padding:2px; margin:1px "  >+ savatga </a></button>
                        <button href="{{route('market-show',['id'=>1,'nameid'=>1])}}" class="btn btn-sm btn-info" style="margin-left: 2px" ><a style="padding:2px; margin-left:2px "  >malumot</a></button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team section end -->

                    {{$links}}
            </div>
        </div>
    </div>
</section>
<!-- Blog section end  -->



@include('layouts/footer')


