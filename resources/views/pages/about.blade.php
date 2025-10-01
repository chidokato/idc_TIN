@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/about.css" rel="stylesheet">
@endsection

@section('content')
<section class="section1">
    <div class="img">
        <img src="assets/images/gioithieu/slider.jpg">
    </div>
    <div class="title">
        <h1>About the Company</h1>
    </div>
</section>

<section class="section2">
    <div class="menu">
        <ul>
            <li> <a class="nav-link" href="#gioithieu">About Us</a> </li>
            <li> <a class="nav-link" href="#tamnhin">Vision & Mission</a> </li>
            <li> <a class="nav-link" href="#muctieu">Strategic Goals</a> </li>
            <li> <a class="nav-link" href="#dichvu">Services</a> </li>
            <li> <a class="nav-link" href="#lanhdao">Leadership Team</a> </li>
        </ul>
    </div>
</section>

<div id="gioithieu">
    <section class="section3 bg" >
        <div class="container" >
            <div class="row">
                <div class="col-md-4">
                    <div class="img">
                        <img src="assets/images/gioithieu/gioi-thieu-02.png">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <p>Founded from passion, built on aspiration, and nurtured by dedication, INDOCHINE Real Estate JSC is rising to become one of the leading real estate enterprises in Vietnam.</p>
                        <p>In 2022, the real estate market endured an unprecedented downturn, forcing hundreds of property companies to close, dissolve, or downsize. Seizing the moment with sharp foresight, INDOCHINE turned challenges into opportunities and made its official debut with a grand launch event, marking the rise of a ‘new star’ in the industry. Backed by proven results, INDOCHINE quickly made waves across the market with hundreds of successful transactions, pioneering efforts to ‘break the ice’ in a frozen real estate landscape. Building on this momentum, INDOCHINE has continued to grow remarkably, rightfully earning its reputation as the ‘dark horse’ of Vietnam’s real estate market.</p>
                        <p>In particular, INDOCHINE takes pride in being among the first enterprises to bring Vietnamese real estate onto the global stage, pioneering in providing comprehensive real estate services for international clients seeking to settle or invest in Vietnam. With capability, passion, professionalism, and deep market insight, INDOCHINE promises to be a trusted bridge, delivering to our valued clients and investors exceptional properties of outstanding value and high liquidity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section4 bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Leading Real Estate Developer & Distributor</h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-02.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-03.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-04.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-05.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-06.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-07.png"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>

<div id="tamnhin">
    <section class="section5 bg">
        <div class="container" >
            <div class="row">
                <div class="col-md-7">
                   <div class="img"><img src="assets/images/gioithieu/tam-nhin.png"></div>
                </div>
                <div class="col-md-5">
                    <div class="content">
                        <div class="title">
                            <img src="assets/images/gioithieu/tam-nhin-1.png">
                            <h3>Vision</h3>
                        </div>
                        <p>Trở thành đơn vị phân phối, cho thuê và quản lý các sản phẩm bất động sản năng động, linh hoạt tại Việt Nam & Quốc tế.</p>
                        <p>To become a leading enterprise in digital transformation and creating exceptional value.</p>
                        <p>To be the top choice real estate developer and distributor in Vietnam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section6 bg">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="iteam">
                        <div class="img"><img src="assets/images/gioithieu/bg_sumenh.png"></div>
                        <div class="text">
                            <img class="icon" src="assets/images/gioithieu/icon_su menh.png">
                            <p>To provide superior products and services, enhance quality of life, and increase value for customers</p>
                            <p>To deliver professional services and perfect solutions</p>
                            <p>To adhere to the highest standards of business ethics and social responsibility, creating pride in a successful real estate brand</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="muctieu">
    <section class="section7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="img"> <img src="assets/images/icon_muctieu.png"> </div>
                    <h2>Strategic Goals</h2>
                    <p>In the next five years, to become a leading enterprise in Vietnam in real estate investment, trading, distribution, and leasing</p>
                    <p>To continuously refine and professionalize services, creating the best and most suitable values</p>
                    <p>Service business will be the spearhead sector driving Indochine’s entry into the international market</p>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="dichvu">
<section class="section8">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Comprehensive Real Estate Services</h2>
                <h3>ONE-STOP REAL ESTATE SERVICE</h3>

                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide iteam1">
                            <h4>DEVELOPMENT</h4>
                            <p>Real Estate Project Development and Business</p>
                        </div>
                        <div class="swiper-slide iteam2">
                            <h4>CONSULTING</h4>
                            <p>Real Estate Project Brand Strategy & Marketing Consulting</p>
                        </div>
                        <div class="swiper-slide iteam3">
                            <h4>PROPERTY</h4>
                            <p>Real Estate Project Distribution & Leasing</p>
                        </div>
                        <div class="swiper-slide iteam4">
                            <h4>HOSPITALITY</h4>
                            <p>Real Estate Operations & Management</p>
                        </div>
                        <div class="swiper-slide iteam5">
                            <h4>GLOBAL</h4>
                            <p>Comprehensive Real Estate Services for International Clients</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>
</section>
</div>

<div id="lanhdao">
<section class="section9">
    <div class="container">
        <h2>Leadership Team</h2>
        <div class="row hangle" style="background:url(assets/images/gioithieu/bg_lanhdao1.png); background-size: cover;">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="timeline">
                    <div class="timeline-entry">
                        <div class="timeline-time">2006 - 2020</div>
                        <div class="timeline-content">
                            <p>Holding senior leadership positions at leading real estate corporations in Vietnam, such as Novaland, FLC Group, Dat Xanh Group, and Dat Xanh Northern,...</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">Năm 2021</div>
                        <div class="timeline-content">
                            <p>Founder of the Vietnam Homes Group brand</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">Năm 2022</div>
                        <div class="timeline-content">
                            <p>Founder of the INDOCHINE Real Estate brand</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img"> <img src="assets/images/gioithieu/C-Hang.png"> </div>
                    <div class="name">BÀ LÊ THỊ HẰNG</div>
                    <div class="function"> Chief Executive Officer <br> INDOCHINE Real Estate Joint Stock Company </div>
                </div>
            </div>
        </div>
        <div class="row haianh" style="background:url(assets/images/gioithieu/bg_lanhdao2.png); background-size: cover;">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img"> <img src="assets/images/gioithieu/hai-anh.png"> </div>
                    <div class="name">ÔNG NGUYỄN HẢI ANH</div>
                    <div class="function"> Business Director <br> INDOCHINE Real Estate Joint Stock Company </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="timeline ">
                    <div class="timeline-entry">
                        <div class="timeline-time">2013 - 2021</div>
                        <div class="timeline-content">
                            <p>Ministry of Agriculture and Rural Development</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2021 - 2022</div>
                        <div class="timeline-content">
                            <p>Head of Sales Department – Dat Xanh Mien Bac</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2022 - Nay</div>
                        <div class="timeline-content">
                            <p>Sales Director <br> INDOCHINE Real Estate Joint Stock Company </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
</div>

@endsection

@section('js')

<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 6,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        // khi màn hình có chiều rộng từ 0px trở lên
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // khi màn hình có chiều rộng từ 640px trở lên
        640: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        // khi màn hình có chiều rộng từ 768px trở lên
        768: {
            slidesPerView: 5,
            spaceBetween: 25,
        },
        // khi màn hình có chiều rộng từ 1024px trở lên
        1024: {
            slidesPerView: 6,
            spaceBetween: 30,
        },
    }
});

var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 5,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        // khi màn hình có chiều rộng từ 0px trở lên
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // khi màn hình có chiều rộng từ 640px trở lên
        640: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        // khi màn hình có chiều rộng từ 768px trở lên
        768: {
            slidesPerView: 4,
            spaceBetween: 25,
        },
        // khi màn hình có chiều rộng từ 1024px trở lên
        1024: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('.nav-link');
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            var href = this.getAttribute('href');
            if (href.startsWith('#')) {
                event.preventDefault();
                var targetId = href.substring(1);
                var targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            } else {
                window.location.href = href;
            }
        });
    });

    window.addEventListener('scroll', function() {
        var currentPosition = window.scrollY;
        links.forEach(function(link) {
            var targetId = link.getAttribute('href').substring(1);
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                var targetPosition = targetElement.offsetTop;
                var targetHeight = targetElement.offsetHeight;

                if (currentPosition >= targetPosition && currentPosition < targetPosition + targetHeight) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            }
        });
    });
});
function smoothScrollTo(target, duration, link) {
    var targetPosition = target.getBoundingClientRect().top + window.scrollY;
    var startPosition = window.scrollY;
    var distance = targetPosition - startPosition;
    var startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        var timeElapsed = currentTime - startTime;
        var run = ease(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) {
            requestAnimationFrame(animation);
        } else {
            window.scrollTo(0, targetPosition);
            link.classList.add('active'); // Thêm lớp 'active' vào liên kết sau khi cuộn hoàn tất
        }
    }

    function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
}
</script>
@endsection