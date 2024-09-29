@extends('layouts.main')

@section('content')
    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100-0 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="{{ route('tentang-gedung') }}" class="post-tag">tentang gedung</a>
                            <h4><a href="#" class="post-headline">Gedung Kesenian Aisyah Sulaiman</a></h4>
                            <p class="mb-3">Gedung ini sebelumnya adalah aula tempat kegiatan siswa-siswa sekolah lanjutan
                                yang didirikan pada tahun 1955. Aula ini kemudian menjadi tempat pertunjukan kesenian dan
                                olahraga bulutangkis. Sekitar tahun 1970-an, aula diubah menjadi kampus Pendidikan Guru
                                Sekolah Lanjutan Pertama. Pada tahun 1988, gedung ini menjadi bangunan SMA Negeri 4 dan
                                sekitar tahun 1991 menjadi SMA Negeri 5. Baru kemudian pada tahun 2004 bangunan ini dipugar
                                dan diubah menjadi Gedung Kesenian Aisyah Sulaiman. Tanjungpinang,Zonakepri- Walikota
                                Tanjungpinang Rahma, mendukung penuh upaya untuk menjadikan Gedung Kesenian Aisyah Sulaiman
                                dan kawasan sekitarnya sebagai pusat kegiatan Seni dan budaya di Tanjungpinang.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <p class="mb-3">

                                DiTanjungpinang,Zonakepri- Walikota Tanjungpinang Rahma, mendukung penuh upaya untuk
                                menjadikan Gedung Kesenian Aisyah Sulaiman dan kawasan sekitarnya sebagai pusat kegiatan
                                Seni dan budaya di Tanjungpinang.

                                Hal itu disampaikan Walikota dalam acara makan siang bersama dan bincang santai tentang
                                gagasan menjadikan Gedung Aisyah Sulaiman dan kawasan sekitarnya sebagai Taman Seni dan
                                Budaya, yang diadakan beberapa tokoh penggerak budaya Tanjungpinang, Senin 27 Desember di
                                Kedai Kopi Sekanak, Tanjungpinang

                                Budayawan Rida K Liamsi mengatakan, bila jadi dilaksanakan, Gedung Aisyah Sulaiman sebagai
                                pusat kegiatan seni budaya akan menjadi pusat Malam Resital Sastra Aisyah Sulaiman yang akan
                                diadakan setiap Sabtu malam.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="{{ asset('img/bg-img/gedung.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->
@endsection
