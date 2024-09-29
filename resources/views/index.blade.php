@extends('layouts.main')

@section('content')
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ asset('img/bg-img/harmoni-1.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">musikal</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">melempar koin ke
                                        udara</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ asset('img/bg-img/harmoni-2.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">musikal</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">sastra klasik,
                                        musik etnik</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ asset('img/bg-img/harmoni-3.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">musikal</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">HARMONI DARI
                                        SEBUAH KATA</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp"
                            data-wow-delay="0.2s" data-wow-duration="1000ms">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="single-blog-thumbnail">
                                        <img src="{{ asset('assets/img/poster.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Blog Content -->
                                    <div class="single-blog-content">
                                        <div class="line"></div>
                                        <a href="#" class="post-tag">musikal</a>
                                        <h4><a href="{{ route('registrasi.index') }}" class="post-headline">Pertunjukan Harmoni Kata</a>
                                        </h4>
                                        <p>Harmoni Kata adalah sebuah pertunjukan alih wahana sastra melayu klasik ke laman kreativitas musik. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eum corporis nostrum repudiandae architecto aut doloribus officia vel inventore fugiat alias eos voluptas ducimus, nesciunt, eaque repellendus ipsum delectus expedita consectetur deleniti reiciendis? Odit esse voluptatum pariatur rerum soluta placeat.</p>
                                        <div class="post-meta">
                                            <p>By Adi Lingkepin</p>
                                            <p class="font-bold">20.00 - 22.00 WIB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Load More -->
                    <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                        <a href="{{ route('registrasi.index') }}" class="btn original-btn">Pesan Sekarang</a>
                    </div>

                    {{-- Maps --}}
                    <iframe id="map" class="my-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.8483760722243!2d104.43809589298503!3d0.9188613767459448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9725a58d07145%3A0x913f7f42b5c717d9!2sGedung%20Kesenian%20Aisyah%20Sulaiman!5e0!3m2!1sen!2sid!4v1727512904571!5m2!1sen!2sid"
                        height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="searchForm" placeholder="Search">
                                <input type="submit" value="submit">
                            </form>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Advertisement</h5>
                            <a href="#"><img src="img/bg-img/add.gif" alt=""></a>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Tags</h5>
                            <div class="widget-content">
                                <ul class="tags">
                                    <li><a href="#">Musikal</a></li>
                                    <li><a href="#">Tradisional</a></li>
                                    <li><a href="#">Komedi</a></li>
                                    <li><a href="#">Tragedi</a></li>
                                    <li><a href="#">Pertunjukan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->
@endsection
