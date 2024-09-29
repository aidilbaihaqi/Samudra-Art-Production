@yield('carbon')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ $title }} - Theater Ticket Booking</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/samudra.jpg') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        #map {
            width: 100%
        }
        .seat {
            width: 50px;
            height: 50px;
            margin: 5px;
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            display: inline-block;
            line-height: 45px;
        }

        .seat-available {
            background-color: #ffc107; /* warna kuning */
            color: black;
        }

        .seat-selected {
            background-color: #007bff; /* warna biru saat terpilih */
            color: white;
        }

        .seat-taken {
            background-color: #6c757d; /* warna abu-abu */
            color: white;
            cursor: not-allowed;
        }

        .seat-row {
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Login</h5>
                        <form action="#" class="newsletterForm" method="post">
                            <input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
                            <button type="submit" class="btn original-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="{{ route('home') }}">Theater</a></li>
                                    <li><a href="{{ route('home') }}">Ticket</a></li>
                                    <li><a href="{{ route('home') }}">Booking</a></li>
                                    <li><a href="{{ route('home') }}">Gedung Aisyah Sulaiman</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Social Area -->
                    <div class="col-12 col-sm-4">
                        <div class="top-social-area">
                            <a href="https://instagram.com/albyhaqee" target="_blank" data-toggle="tooltip"
                                data-placement="bottom" title="Instagram"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a>
                            <a href="https://github.com/aidilbaihaqi" target="_blank" data-toggle="tooltip"
                                data-placement="bottom" title="Github"><i class="fa fa-github"
                                    aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/in/aidilbaihaqi/" target="_blank" data-toggle="tooltip"
                                data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="flex text-center">
            <div class="container h-100">
                <div class="row h-100 justify-content-center">
                    <div class="col-12">
                        <a href="{{ route('home') }}" class="original-logo text-center"><img class="" src="{{ asset('img/core-img/logo.svg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Login btn -->
                        @guest
                        <div class="subscribe-btn">
                            <a href="{{ route('login') }}" class="btn subscribe-btn">Login</a>
                        </div>
                        @endguest
                        @auth
                            <div class="subscribe-btn">
                                <a href="{{ route('dashboard') }}" class="btn subscribe-btn">Dashboard</a>
                            </div>
                        @endauth

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('tentang-gedung') }}">Tentang Gedung</a></li>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="#">
                                        <input type="text" id="search" placeholder="Search something...">
                                        <div id="close-icon"></div>
                                        <input class="d-none" type="submit" value="">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Footer Nav Area -->
                    <div class="classy-nav-container breakpoint-off">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-center">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span>
                                    </div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('tentang-gedung') }}">Tentang Gedung</a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>

                    <!-- Footer Social Area -->
                    <div class="footer-social-area mt-30">
                        <a href="https://instagram.com/albyhaqee" target="_blank" data-toggle="tooltip"
                            data-placement="bottom" title="Instagram"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="https://github.com/aidilbaihaqi" target="_blank" data-toggle="tooltip"
                            data-placement="bottom" title="Github"><i class="fa fa-github"
                                aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/aidilbaihaqi/" target="_blank" data-toggle="tooltip"
                            data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;
        <script>
            document.write(new Date().getFullYear());
        </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
        Aidil Baihaqi
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>

    {{-- Modal Pilih Kursi --}}
<script>
    // Buka modal
    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('seatModal').classList.remove('hidden');
    });

    // Tutup modal
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('seatModal').classList.add('hidden');
    });

    // Fungsi untuk memilih kursi dan set value
    let selectedSeat = null;
    const seatInput = document.getElementById('selectedSeat');
    
    document.querySelectorAll('.seat').forEach(function(seat) {
        seat.addEventListener('click', function() {
            if (selectedSeat) {
                selectedSeat.classList.remove('bg-success');
                selectedSeat.classList.add('bg-warning');
            }
            selectedSeat = seat;
            selectedSeat.classList.remove('bg-warning');
            selectedSeat.classList.add('bg-success');
            
            // Set value of selected seat in hidden input
            seatInput.value = seat.getAttribute('data-seat');
        });
    });

</script>

</body>

</html>
