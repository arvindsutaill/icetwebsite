@extends('layouts.front.theme')


@section("content")
@php($path = 8)
@svg($path)
<div class="container-xxl bg-primary hero-header">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Lead to Success with ICET Agra</h1>
                <p class="text-white pb-3 animated slideInDown">Institute of Computing With Enhanced Technology, Accredited By National Institute of Electronics &amp; Information Technology (NIELT) Govt. of India and UPDESCO (U.P. Govt) Authorized Training Center.</p>
                <a href="" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                <a href="{{ route('front.courses') }}" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Courses</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid animated zoomIn" src="front/img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
<a href="http://127.0.0.1:8000/landing_page/free-o-level-2023-24">Click herer</a>
 <!-- Department Start -->
 @if(count($departments) > 1)
 <div class="container-xxl py-5 d-none">
     <div class="container py-5 px-lg-5">
         <div class="row g-4">
             @forelse ($departments as $department)
                 <x-front.department :department="$department"/>
             @empty
             @endforelse
         </div>
     </div>
 </div>
 @endif
 <!-- Department End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">ICET Agra<span></span></p>
                <h1 class="mb-5">We train you with perfection</h1>
                
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Thousands of video examples</p>
                        <p class="mb-2">85%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Immersive learning that makes you feel like you're right there</p>
                        <p class="mb-2">90%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Pratical along with training</p>
                        <p class="mb-2">95%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="front/img/about.png">
            </div>
        </div>
    </div>
</div>


<!-- About End -->


<!-- Facts Start -->
<div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">15</h1>
                <p class="text-white mb-0">Years Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">10</h1>
                <p class="text-white mb-0">Team Members</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">100</h1>
                <p class="text-white mb-0">100% Satisfied Students</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                <p class="text-white mb-0">Placed Students</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Why ICET<span></span></p>
            <h1 class="text-center mb-5">Why you’ll love learning with ICET Agra</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-book fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Curriculum</h5>
                    <p class="m-0">A world class curriculum developed by ICET in close partnership with NIELT offers course like CCC, BCC, OLEVEL. The programmes we offer are desgined by our team of experts, based on the global industry requirements</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-rupee-sign fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Cost Effectiveness</h5>
                    <p class="m-0">At ICET our aim is to bring global expertise and world class knowledge to you in the most cost effective manner. With a strong nation wide network of training centres, we work hard to bring down the cost of training.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-bullseye fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Objective</h5>
                    <p class="m-0">For an elite major likes computer science, to attract people joining course, a creation and innovation is needed. ICET give you visual tools to help students approach this field most effectively.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
<!--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa- fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Stay motivated</h5>
                    <p class="m-0">We make it easy to form a habit of language learning, with game-like features, fun challenges, and reminders from our friendly mascot, Duo the owl.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>-->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-smile-beam fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Have fun with it!</h5>
                    <p class="m-0">Effective learning doesn’t have to be boring! Build your skills each day with engaging exercises and playful characters.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Service End -->



<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Explorer<span></span></p>
            <h1 class="text-center mb-5">Recently Completed Course</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    @forelse ($departments as $department)
                        <li class="mx-2" data-filter=".department-{{ $department->id }}">{{ $department->title }}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="row g-3 portfolio-container">
            <!-- course Start -->
                @if(count($courses) > 1)
                <div class="container-xxl py-5">
                    <div class="container py-5 px-lg-5">
                        <div class="row g-4">
                            @forelse ($courses as $course)
                                <x-front.course :course="$course"/>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
                @endif
            <!-- course End -->
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
        <h1 class="text-center mb-5">What Our Students Say!</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>ICET so far has been the best thing that has happened to me… Its difficult to find such a place where people are so different, so competitive and yet so close to each other… and when it comes to the Institute… its a heaven on earth…”</p>
                <div class="d-flex align-items-center">
                    <!--<img class="img-fluid flex-shrink-0 rounded-circle" src="front/img/testimonial-1.jpg" style="width: 65px; height: 65px;">-->
                    <div class="ps-4">
                        <h5 class="mb-1">Dharmendar</h5>
                        <!--<span>Web designing</span>-->
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>ICET has provided me the platform to accomplish all my dreams. It has given me an opportunity to unleash my full potential and to materialize my career goals. ICET has prepared me to face every battle in corporate world.</p>
                <div class="d-flex align-items-center">
                    <!--<img class="img-fluid flex-shrink-0 rounded-circle" src="front/img/testimonial-2.jpg" style="width: 65px; height: 65px;">-->
                    <div class="ps-4">
                        <h5 class="mb-1">Neha Thakur</h5>
                        <!--<span>O Level</span>-->
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>I always get a high from the kind of energy that prevails on campus. There is so much to do even when there is nothing to do, from struggling to finish assignments to rushing for maggi at 4am.</p>
                <div class="d-flex align-items-center">
                    <!--<img class="img-fluid flex-shrink-0 rounded-circle" src="front/img/testimonial-3.jpg" style="width: 65px; height: 65px;">-->
                    <div class="ps-4">
                        <h5 class="mb-1">Akash Jaishwal</h5>
                        <!--<span>CCC</span>-->
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Life at ICET is full of energy. The wide gamut of activities ranging from interest groups to online gaming events provide everyone with ample opportunities to go beyond just academics.</p>
                <div class="d-flex align-items-center">
                    <!--<img class="img-fluid flex-shrink-0 rounded-circle" src="front/img/testimonial-3.jpg" style="width: 65px; height: 65px;">-->
                    <div class="ps-4">
                        <h5 class="mb-1">Jyoti Sharma</h5>
                        <!--<span>CCC</span>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
            <h1 class="text-center mb-5">Our Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="front/img/team-2.jpg" alt="">
                        <h5>Monika Mam</h5>
                        <span>Kids Councellor</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="front/img/team-1.jpg" alt="">
                        <h5>Arvind Sutail</h5>
                        <span>Kids Councellor</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="front/img/team-3.jpg" alt="">
                        <h5>Some Guy</h5>
                        <span> Trainer</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection